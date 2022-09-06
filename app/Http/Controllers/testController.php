<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Business\PaymentController;
// namespace App\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\parentController;
use App\Classes\CryptoApi;
use App\Classes\SendWyreApi;
use App\WalletNames;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class testController extends Controller
{
    public function index()
    {
        // self::createWalletAddress();
        $CryptoApi = new CryptoApi();
        $sednWyreApi = new SendWyreApi();
        $CryptoApi ->generateAddress('ETH');
        // $testcontroller-> buyCrypto();
        // $sednWyreApi -> buyCrypto(1, 'BCH', 'debit-card');
        // $sednWyreApi -> createAccount();
    }

    
}



