<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Classes\CryptoApi;
use App\Classes\SendWyreApi;
use App\WalletNames;
use App\User;
use App\WalletInfo;
use Illuminate\Support\Facades\Crypt;
use App\TransactionHistory;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function index()
    {
        // get info of BTC balance
        $wallet = WalletNames::where('user_id', Auth::user()->id)->where('crypto_type', 'BTC')->first();
        $CryptoApi = new CryptoApi();
  
        $BTCBalance = $CryptoApi->getBalance('BTC', $wallet->wallet_name);
        $BCHBalance = $CryptoApi->getBalance('BCH', $wallet->wallet_name);
        $ETHBalance = $CryptoApi->getBalance('ETH', $wallet->wallet_name);
        $USDTBalance = $CryptoApi->getBalance('USDT', $wallet->wallet_name);
    
        //get The transaction history
        $transactionHistory = $CryptoApi->getTransactions('BTC', $wallet->wallet_name);

        $BTCDepositAddress = $CryptoApi->getWalletDetails('BTC', $wallet->wallet_name, 1)[0]['address'];
        $BCHDepositAddress = $CryptoApi->getWalletDetails('BCH', $wallet->wallet_name, 1)[0]['address'];
        $ETHDepositAddress = WalletInfo::where('wallet_name', $wallet->wallet_name)->where('crypto_type', 'ETH')->first()->address;
        $USDTDepositAddress = WalletInfo::where('wallet_name', $wallet->wallet_name)->where('crypto_type', 'USDT')->first()->address;
        
        //retrieve the value of Crypto Currency     
        $response = Http::get('https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,BCH,USDT&tsyms=USD');
        $data = json_decode($response->body());
        
        return view('business.Payment', ['pagename'=>'payment', 'BTCBalance'=>$BTCBalance, 
        'BCHBalance'=>$BCHBalance, 'ETHBalance'=>$ETHBalance, 'USDTBalance'=>$USDTBalance,
        'BTCDepositAddress'=>$BTCDepositAddress, 'BCHDepositAddress'=>$BCHDepositAddress,
        'ETHDepositAddress'=>$ETHDepositAddress, 'USDTDepositAddress'=>$USDTDepositAddress, 
        'CryptoCurrencyValue'=>$data,
        'transactionHistory'=>$transactionHistory]);
    }
    private function getCryptoCurrencyInformation($currencyId, $convertCurrency = "USD"){
        // Create a new Guzzle Plain Client
        $client = new Client();

        // Define the Request URL of the API with the providen parameters
        $requestURL = "https://coinmarketcap.com/api/v1/ticker/$currencyId/?convert=$convertCurrency";

        // Execute the request
        $singleCurrencyRequest = $client->request('GET', $requestURL);
        
        // Obtain the body into an array format.
        $body = json_decode($singleCurrencyRequest->getBody() , true)[0];

        // Returns the array with information about the desired currency
        return $body;
    }

    public function financial()
    {
        $wallet = WalletNames::where('user_id', Auth::user()->id)->where('crypto_type', 'BTC')->first();
        $CryptoApi = new CryptoApi();
  
        $BTCBalance = $CryptoApi->getBalance('BTC', $wallet->wallet_name);
        $BCHBalance = $CryptoApi->getBalance('BCH', $wallet->wallet_name);
        $ETHBalance = $CryptoApi->getBalance('ETH', $wallet->wallet_name);
        $USDTBalance = $CryptoApi->getBalance('USDT', $wallet->wallet_name);

        $response = Http::get('https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,BCH,USDT&tsyms=USD');
        $data = json_decode($response->body());

        return view('business.Financial', ['pagename'=>'financial', 'BTCBalance'=>$BTCBalance, 
        'BCHBalance'=>$BCHBalance, 'ETHBalance'=>$ETHBalance, 'USDTBalance'=>$USDTBalance,
        'CryptoCurrencyValue'=>$data]);
    }

    public function buyCrypto(Request $request)
    {
    
        $cryptoType = $request->cryptoType;
        $amount = $request->amount;
        $paymentMethod = $request->paymentMethod;
        if($paymentMethod == "applePay") {
            $paymentMethod = "apple-pay";
        }
        else if ($paymentMethod == "cardPay") {
            $paymentMethod = 'debit-card';
        }

        $sednWyreApi = new SendWyreApi();
  
        $status = $sednWyreApi -> buyCrypto($amount, $cryptoType,  $paymentMethod);
        return response()->json(['value'=>$status]);

    }
    public function sendTransaction(Request $request)
    {
        $cryptoType = $request->cryptoType;
        $wallet = WalletNames::where('user_id', Auth::user()->id)->where('crypto_type', $cryptoType)->first();
        $walletName = $wallet->wallet_name;
        $password = Crypt::decryptString($wallet->password);
        $address = $request->recipientAddress;
        $amount = $request->amount;
        $fee = "0.00001";
        $lockTime = 0;
        
        $CryptoApi = new CryptoApi();
        $status = $CryptoApi->sendTransaction(Auth::user()->id, $cryptoType, $walletName, $password, $address, $amount, $fee, $lockTime);

        return response()->json(['value'=>$status]);

    }

    public function getUserInformation() {
        $currentUser = User::where('id', Auth::user()->id)->first();
        
        return response()->json([
            'identity_verified' => $currentUser->identity_verified, 
            'payment_verified' => $currentUser->payment_verified
        ]);

    }
 }