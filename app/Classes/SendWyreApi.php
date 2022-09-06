<?php

namespace App\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\parentController;
use App\TransactionHistory;
use App\WalletNames;
use App\User;
use App\WalletInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class SendWyreApi
{
    public function buyCrypto($amount, $cryptoType, $paymentMethod) {

        $wallet = WalletNames::where('user_id', Auth::user()->id)->where('crypto_type', 'BTC')->first();
        $CryptoApi = new CryptoApi();
        $DepositAddress = "";
        if($cryptoType == 'BTC') {
            $DepositAddress = $CryptoApi->getWalletDetails('BTC', $wallet->wallet_name, 1)[0]['address'];
        }
        else if ($cryptoType == 'BCH') {
            $DepositAddress = $CryptoApi->getWalletDetails('BCH', $wallet->wallet_name, 1)[0]['address'];
        }
        else if ($cryptoType == 'ETH')  {
            $DepositAddress = WalletInfo::where('wallet_name', $wallet->wallet_name)->where('crypto_type', 'ETH')->first()->address;
        }
        else if ($cryptoType == 'USDT')  {
            $DepositAddress = WalletInfo::where('wallet_name', $wallet->wallet_name)->where('crypto_type', 'USDT')->first()->address;
        }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.env('SENDWYRE_SECRET_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.testwyre.com/v3/orders/reserve',[ 
            "referrerAccountId"=> "AC_2N9HDJLWHZX",
            "amount" => $amount,
            "sourceCurrency"=> "USD",
            "destCurrency"=> $cryptoType,
            "email"=> "user@sendwyre.com",
            "dest"=> $DepositAddress,
            "paymentMethod"=> $paymentMethod,        
        ]);
        // dd($response);
        $data = json_decode($response->body());
        return $data->reservation;
    }

    public function createAccount($request) {
        $birthday = date("Y-m-d", strtotime($request->birthday));
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.env('SENDWYRE_SECRET_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.testwyre.com/v3/accounts',[ 
            "type"=>"INDIVIDUAL",
            "country"=> "US",
            "subaccount"=> true,
            "profileFields"=> [
                ["fieldId"=> "individualLegalName","value"=> $request->firstName.' '.$request->lastName],
                ["fieldId"=> "individualCellphoneNumber","value"=> '+1'.$request->phoneNumber],
                ["fieldId"=> "individualEmail","value"=> $request->email],
                ["fieldId"=> "individualResidenceAddress",
                    "value"=> ["street1"=> $request->address1,
                            "street2"=> $request->address2,
                            "city"=> $request->city,
                            "state"=> $request->state,
                            "postalCode"=> $request->zip,
                            "country"=> "US" 
                            ]
                ],
                // ["fieldId"=> "individualDateOfBirth", "value"=> "1992-12-15"],
                ["fieldId"=> "individualDateOfBirth", "value"=> $birthday],
          
            ]
        ]);
        $data = json_decode($response->body());

        $currentUser = User::where('id', Auth::user()->id)->first();
        $currentUser->account_id = $data->id;
        $currentUser->profile_completed = "completed";
        $currentUser->update();
    }
    public function uploadIdentity() {
        $currentUser = User::where('id', Auth::user()->id)->first();
        $response = Http::withHeaders([
            'X-Api-Key'=> env('SENDWYRE_API_KEY'),
            'X-Api-Signature'=> env('SENDWYRE_SECRET_KEY'),

            'Content-Type' => 'image/jpeg',
        ])->post('http://api.sendwyre.com/v3/accounts/'.$currentUser->account_id.'/individualGovernmentId?documentType=DRIVING_LICENSE&documentSubType=BACK&timestamp=1426252182534',[ 
            'upload-file' => 'img/baloon.jpg'
        ]);

        $data = json_decode($response->body());
        $currentUser->identity_verified = 'Verified';
        $currentUser->update();
    }
    public function updatePayment($request){
        $currentUser = User::where('id', Auth::user()->id)->first();
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.env('SENDWYRE_SECRET_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.testwyre.com/v3/accounts/'.$currentUser->account_id,[ 
            "profileFields"=> [
               
                // ["fieldId"=> "individualDateOfBirth", "value"=> "1992-12-15"],
                ["fieldId"=> "individualSourceOfFunds", "value"=> $request->publicToken],
          
            ]
        ]);
        $data = json_decode($response->body());

        $currentUser->account_id = $data->id;
        $currentUser->payment_type = "ach";
        $currentUser->update();
        
    }
    public function getMyAccountInformation() {
        $currentUser = User::where('id', Auth::user()->id)->first();
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.env('SENDWYRE_SECRET_KEY'),
            'Content-Type' => 'application/json',
        ])->get('https://api.testwyre.com/v3/accounts/'.$currentUser->account_id);
        $data = json_decode($response->body());
        // dd($data);
    }
}