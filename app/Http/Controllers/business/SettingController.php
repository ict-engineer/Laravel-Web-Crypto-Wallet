<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Classes\SendWyreApi;

class SettingController extends Controller
{
    public function index()
    {
        $currentUser = User::where('id', Auth::user()->id)->first();
        return view('business.Setting', ['pagename'=>'setting', 'account_id'=>$currentUser->account_id,
        'profile_completed'=>$currentUser->profile_completed, 'identity_verified'=>$currentUser->identity_verified,
        'payment_verified'=>$currentUser->payment_verified, 'phone_verified'=>$currentUser->phone_verified,
        'email_verified'=>$currentUser->email_verified,]);
    }
    public function profilePage()
    {
        $sednWyreApi = new SendWyreApi();
        $sednWyreApi->getMyAccountInformation();
        return view('business.account.profile', ['pagename'=>'setting']);
    }
    public function identityPage() {
        $currentUser = User::where('id', Auth::user()->id)->first();
        if($currentUser->profile_completed == null){
            return view('business.account.identity', ['pagename'=>'setting', 'profileInputed'=>false]);
        }
        else {
            return view('business.account.identity', ['pagename'=>'setting', 'profileInputed'=>true]);
        }
    }
    public function createProfile(Request $request) 
    {
        $sednWyreApi = new SendWyreApi();
        $sednWyreApi->createAccount($request);
        return redirect('/business/setting');
    }
    public function verifyIdentity(Request $request) {
        $sednWyreApi = new SendWyreApi();
        $sednWyreApi->uploadIdentity();
        return redirect('/business/setting');
    }
    public function paymentPage (Request $request) {
        $currentUser = User::where('id', Auth::user()->id)->first();
        if($currentUser->profile_completed == null){
            return view('business.account.payment', ['pagename'=>'setting', 'profileInputed'=>false]);
        }
        else {
            return view('business.account.payment', ['pagename'=>'setting', 'profileInputed'=>true]);
        }
    }
    public function verifyPayment(Request $request) {
        $sednWyreApi = new SendWyreApi();
        $sednWyreApi->updatePayment($request);
        return redirect('/business/setting');
    }
}
