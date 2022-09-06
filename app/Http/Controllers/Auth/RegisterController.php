<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Classes\CryptoApi;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest:admin');
        // $this->middleware('guest:general_user');     
        // $this->middleware('guest:business_user');
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(true, 'isdelete')],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'organization_name' => ['required'],
        ]);
    }

    public function showAdminRegisterForm()
    {
        return view('auth.AdminRegister');
    }
    
    protected function createAdminRegister(request $request)
    {
        // dd("2332232");
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'user_type' => 'Admin',
            'password' => Hash::make($request->input('password')),
            
        ]);
        $user->assignRole('Admin');
        return redirect("/admin/login");
    }

    protected function createGeneralUser(request $request)
    {
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'user_type' => 'General User',
            'password' => Hash::make($request->input('password')),
            
        ]);
        $user->assignRole('User');
        return redirect("/login");
    }

    
    protected function createBusinessUser(request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password'         => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
            'organization_name' => ['required'],
        ]);
        // $this->validator($request->input());
        $user = User::create([
            'organization_name' => $request->input('organization_name'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'website_url' => $request->input('website_url'),
            'email' => $request->input('email'),
            'yearly_revenue' => $request->input('revenue'),
            'user_type' => 'Business User',
            'password' => Hash::make($request->input('password')),
            
        ]);
        // dd($user->id)    
        $user->assignRole('Business');

        $CryptoApi = new CryptoApi();
        $walletName = "test1wallet8".$user->id;
        $password = $user->password;
        
        $CryptoApi->createWallet($user->id, "BTC", $walletName, $password);
        $CryptoApi->createWallet($user->id, "ETH", $walletName, $password);
        $CryptoApi->createWallet($user->id, "BCH", $walletName, $password);
        $CryptoApi->createWallet($user->id, "USDT", $walletName, $password);
        
        
        return redirect("/login");
    }
}
