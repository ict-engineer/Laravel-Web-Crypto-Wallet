<?php

namespace App\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\parentController;
use App\TransactionHistory;
use App\WalletNames;
use App\WalletInfo;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


class CryptoApi
{

    public function createWallet($userId, $cryptoType, $walletName, $password) {
        if($cryptoType == 'BTC'){     //create BTC wallet.
                $response = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'X-API-Key' => env('CRYPTOAPIS_KEY')
                ])->post('https://api.cryptoapis.io/v1/bc/btc/testnet/wallets/hd', [
                    'walletName' => $walletName,
                    'addressCount' => 1,
                    'password' => $password
                ]);

                $data = json_decode($response->body());
                // dd($data);
                if($response->successful())
                {
                    WalletNames::create([
                        'user_id' => $userId,
                        'crypto_type' => $cryptoType,
                        'wallet_name' => $walletName,
                        'address' => $data->payload->addresses[0]->address,
                        'password' => Crypt::encryptString($password),
                    ]);
                    return 'Successfully created BTC wallet!';
                }
                else
                {
                    return "Failed to create the BTC wallet!";
                }
        }
        else if($cryptoType == 'BCH'){     //create BCH wallet.
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->post('https://api.cryptoapis.io/v1/bc/bch/testnet/wallets/hd', [
                'walletName' => $walletName,
                'addressCount' => 1,
                'password' => $password
            ]);

            $data = json_decode($response->body());
            // dd($data);
            if($response->successful())
            {
                WalletNames::create([
                    'user_id' => $userId, 
                    'crypto_type' => $cryptoType,
                    'address' => $data->payload->addresses[0]->address,
                    'wallet_name' => $walletName,
                    'password' => Crypt::encryptString($password),
                ]);
                return 'Successfully created BCH wallet!';
            }
            else
            {
                return "Failed to create the BCH wallet";
            }
        }
        else if($cryptoType == 'ETH'){     //create ETH wallet.
            WalletNames::create([
                'user_id' => $userId,
                'crypto_type' => $cryptoType,
                'wallet_name' => $walletName,
                'password' => Crypt::encryptString($password),
            ]);
            
            $addressInfo = $this->generateAddress("ETH");
            WalletInfo::create([
                'wallet_name' => $walletName,
                'user_id' => $userId, 
                'crypto_type' => $cryptoType,
                'address' => $addressInfo->payload->address,
                'private_key' => Crypt::encryptString($addressInfo->payload->privateKey),
                'public_key' => $addressInfo->payload->publicKey,
                'wif' => "blank",
            ]);
            
        }
        else if($cryptoType == 'USDT'){     //create USDT wallet.
            WalletNames::create([
                'user_id' => $userId,
                'crypto_type' => $cryptoType,
                'wallet_name' => $walletName,
                'password' => Crypt::encryptString($password),
            ]);
            
            $addressInfo = $this->generateAddress("USDT");
            WalletInfo::create([
                'wallet_name' => $walletName,
                'user_id' => $userId, 
                'crypto_type' => $cryptoType,
                'address' => $addressInfo->payload->address,
                'private_key' => Crypt::encryptString($addressInfo->payload->privateKey),
                'public_key' => $addressInfo->payload->publicKey,
                'wif' => $addressInfo->payload->wif,
            ]);
            
        }
    }

    public function sendTransaction($userId, $cryptoType, $walletName, $password, $address, $amount, $fee, $locktime)
    {
        if($cryptoType == 'BTC'){     //send BTC transaction.
            
            $inputs = $this->getWalletDetails('BTC', $walletName, $amount);
            // dd($inputs);
            $outputs = array();
            $transactionInfo = [
                'address' => $address,
                'value' => $amount
            ];
            array_push($outputs, $transactionInfo);

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->post('https://api.cryptoapis.io/v1/bc/btc/testnet/txs/hdwallet',[
                'walletName' => $walletName,
                'password' => $password,
                'inputs' => $inputs,
                'outputs' => $outputs,
                'fee' => [
                    'value'=> $fee
                ],
                'locktime'=> $locktime,
            ]);
            $data = json_decode($response->body());
            // dd($data);
            // dd($data);
            if($response->successful())
            {
                // dd("success", $data);
                // dd($data);
                TransactionHistory::create([
                    'user_id' => $userId,
                    'wallet_name' => $walletName,
                    'crypto_type' => $cryptoType, 
                    'address' => $address,
                    'amount' => $amount,
                    'status' => 'Sent',
                ]);
                // dd("success1", $data);
                return 'Success';
            }
            else
            {
                return $data->meta->error->message;
            }
        }
        else if($cryptoType == 'BCH'){     //send BCH transaction
            $inputs = $this->getWalletDetails('BCH', $walletName, $amount);
            $outputs = array();
            $transactionInfo = [
                'address' => $address,
                'value' => $amount
            ];
            array_push($outputs, $transactionInfo);

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->post('https://api.cryptoapis.io/v1/bc/bch/testnet/txs/hdwallet',[
                'walletName' => $walletName,
                'password' => $password,
                'inputs' => $inputs,
                'outputs' => $outputs,
                'fee' => [
                    'value'=> $fee
                ],
                'locktime'=> $locktime,
            ]);
            $data = json_decode($response->body());
            if($response->successful())
            {
                TransactionHistory::create([
                    'user_id' => $userId,
                    'wallet_name' => $walletName,
                    'crypto_type' => $cryptoType, 
                    'address' => $address,
                    'amount' => $amount,
                    'status' => 'Sent',
                ]);
                return 'Success';
            }
            else
            {
                return $data->meta->error->message;
            }
        }

        else if($cryptoType == 'ETH'){     //send BCH transaction
            //Create a Transaction
            $addressInfo = WalletInfo::where('wallet_name', $walletName)->where('crypto_type', $cryptoType)->first();

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->post('https://api.cryptoapis.io/v1/bc/eth/ropsten/txs/new-pvtkey',[
                'fromAddress' => $addressInfo->address,
                'toAddress' => $address,
                'gasPrice' => 21000000000,
                'gasLimit' => 21000,
                'value' => $amount,
                'privateKey' => Crypt::decryptString($addressInfo->private_key),
            ]);
            $data = json_decode($response->body());

            if(!$response->successful())
            {
                return $data->meta->error->message;
            }
            $hex = $data->payload->hex;

            //prepare a Transaction
            $walletDetails = $this->getWalletDetails('ETH', $walletName);

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->post('https://api.cryptoapis.io/v1/bc/eth/ropsten/txs/send',[
                'fromAddress' => $walletDetails->payload->address,
                'toAddress' => $address,
                'value' => $walletDetails->payload->balance,
            ]);
            //broadcast a Transaction
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->post('https://api.cryptoapis.io/v1/bc/eth/ropsten/txs/push',[
                'hex' => $hex,
            ]);

            $data = json_decode($response->body());
            if(!$response->successful())
            {
                return $data->meta->error->message;
            }

            if($response->successful())
            {
                TransactionHistory::create([
                    'user_id' => $userId,
                    'wallet_name' => $walletName,
                    'crypto_type' => $cryptoType, 
                    'address' => $address,
                    'amount' => $amount,
                    'status' => 'Sent',
                ]);
                return 'Success';
            }
            else
            {
                return $data->meta->error->message;
            }
        }

        else if($cryptoType == 'USDT'){     //send USDT transaction
            //Create a Transaction
            
            $addressInfo = WalletInfo::where('wallet_name', $walletName)->where('crypto_type', $cryptoType)->first();
            $walletDetails = $this->getWalletDetails('USDT', $walletName, 0);
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->post('https://api.cryptoapis.io/v1/bc/btc/omni/testnet/txs/new',[
                'from' => $walletDetails->payload->address,
                'to' => $address,
                'value' => $amount,
                'fee' => $fee,
                'propertyID' => 31,
                'wif' =>$addressInfo->wif,
            ]);
            $data = json_decode($response->body());
            if($response->successful())
            {
                TransactionHistory::create([
                    'user_id' => $userId,
                    'wallet_name' => $walletName,
                    'crypto_type' => $cryptoType, 
                    'address' => $address,
                    'amount' => $amount,
                    'status' => 'Sent',
                ]);
                return 'Success';
            }
            else
            {
                return $data->meta->error->message;
            }
        }
    }

    public function getTransactions($cryptoType, $walletName) {
   
        $BTCDepositAddress = $this->getWalletDetails('BTC', $walletName, 1)[0]['address'];
        $BCHDepositAddress = $this->getWalletDetails('BCH', $walletName, 1)[0]['address'];
        $ETHDepositAddress = WalletInfo::where('wallet_name', $walletName)->where('crypto_type', 'ETH')->first()->address;
        $USDTDepositAddress = WalletInfo::where('wallet_name', $walletName)->where('crypto_type', 'USDT')->first()->address;

        //get Transaction history of BTC
        // $BTCDepositAddress = $this->getWalletDetails('BTC', $walletName, 1)[0]['address'];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-API-Key' => env('CRYPTOAPIS_KEY')
        ])->get('https://api.cryptoapis.io/v1/bc/btc/testnet/address/'.$BTCDepositAddress.'/transactions');
        $data = json_decode($response->body());
        $transactions = array();
        $transactions = $this->saveConfirmedTransactions('BTC', $data, $BTCDepositAddress, $transactions, 'Confirmed');
        
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-API-Key' => env('CRYPTOAPIS_KEY')
        ])->get('https://api.cryptoapis.io/v1/bc/btc/testnet/address/'.$BTCDepositAddress.'/unconfirmed-transactions');
        $data = json_decode($response->body());
        $transactions = $this->saveConfirmedTransactions('BTC', $data, $BTCDepositAddress, $transactions, 'Pending');
        
        //getTransaction history of ETH
        return $transactions;
        // dd($transactions);

    }

    public function saveConfirmedTransactions($cryptoType, $data, $myaddress, $transactions, $status)
    {
        for($index = 0 ; $index < $data->meta->totalCount ; $index ++)
        {
            // dd($data->meta->totalCount);
            $transactionId = $data->payload[$index]->txid;
            $address = $data->payload[$index]->txins[0]->addresses[0];
            $detailsTransaction = 'Received';
            $amount = 0;
            if ( $address == $myaddress )
            {
                $detailsTransaction = 'Sent';
                foreach ( $data->payload[$index]->txouts as $txout) {
                    if ($txout->addresses[0] != $myaddress) {
                        $address = $txout->addresses[0];
                        $amount = $txout->amount;
                    }
                }
            }
            else {
                $detailsTransaction = 'Received';
                foreach ( $data->payload[$index]->txouts as $txout) {
                    if ($txout->addresses[0] == $myaddress) {
                        $amount = $txout->amount;
                    }
                }
            }
            // dd($transactionId, $address, $detailsTransaction, $amount);
            $transaction = [
                'txId' => $transactionId,
                'coin' => $cryptoType,
                'address' => $address,
                'details' => $detailsTransaction,
                'amount' => $amount,
                'time' => $data->payload[$index]->time,
                'status' => $status
            ];
            array_push($transactions, $transaction);
        }
        return $transactions;
    }

    public function testfunction()
    {
        // $response = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     'X-API-Key' => env('CRYPTOAPIS_KEY')
        // ])->get('https://api.cryptoapis.io/v1/bc/btc/testnet/txs/txid/mphxh5NQi4hJWadFEJbEjPiN2PpmHSTdWM');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-API-Key' => env('CRYPTOAPIS_KEY')
        ])->get('https://api.cryptoapis.io/v1/bc/btc/testnet/wallets/hd/businesswallet26');
        $data = json_decode($response->body());
        // dd($data);
    }

    public function getWalletDetails($cryptoType, $walletName, $amount){
        if($cryptoType == 'BTC'){     // get the addresses and values of BTC wallet.
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->get('https://api.cryptoapis.io/v1/bc/btc/testnet/wallets/hd/'.$walletName);
            
            $data = json_decode($response->body());
            $walletDetails = array();
            
            foreach ($data->payload->addresses as $address)
            {
                $addressinput = [
                    'address' => $address->address,
                    'value' => $amount
                ];
                array_push($walletDetails, $addressinput);
            }
            return $walletDetails;
        }
        else if($cryptoType == 'BCH'){        // get the addresses and values of BCH wallet.
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->get('https://api.cryptoapis.io/v1/bc/bch/testnet/wallets/hd/'.$walletName);
            
            $data = json_decode($response->body());
            $walletDetails = array();
            foreach ($data->payload->addresses as $address)
            {
                $addressinput = [
                    'address' => $address->address,
                    'value' => $amount
                ];
                array_push($walletDetails, $addressinput);
            }
            // dd($walletDetails);
            return $walletDetails;
        }
        else if($cryptoType == 'ETH'){        // get the addresses and values of BCH wallet.
            $address = WalletInfo::where('wallet_name', $walletName)->where('crypto_type', $cryptoType)->first();
            
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->get('https://api.cryptoapis.io/v1/bc/eth/ropsten/address/'.$address->address);
            
            $data = json_decode($response->body());
            // dd($data);
            return $data;
        }
        else if($cryptoType == 'USDT'){        // get the addresses and values of BCH wallet.
            $address = WalletInfo::where('wallet_name', $walletName)->where('crypto_type', $cryptoType)->first();
            
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->get('https://api.cryptoapis.io/v1/bc/btc/testnet/address/'.$address->address);
            
            $data = json_decode($response->body());
            return $data;
        }
    }

    public function getTransactionHistory($userId, $crypto_Type)
    {
        $history = TransactionHistory::where('user_id', $userId)->where('crypto_type', $crypto_Type);
        return $history;
    }

    public function getBalance($cryptoType, $walletName){
        if($cryptoType == 'BTC'){     // get the addresses and values of BTC wallet.
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->get('https://api.cryptoapis.io/v1/bc/btc/testnet/wallets/hd/'.$walletName);
            
            $data = json_decode($response->body());
            return $data->payload->totalBalance;
        }
        else if($cryptoType == 'BCH'){        // get the addresses and values of BCH wallet.
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->get('https://api.cryptoapis.io/v1/bc/bch/testnet/wallets/hd/'.$walletName);
            
            $data = json_decode($response->body());
            $walletDetails = array();
            // dd($data);
            return $data->payload->totalBalance;
        }
        else if($cryptoType == 'ETH'){        // get the addresses and values of BCH wallet.
            $address = WalletInfo::where('wallet_name', $walletName)->where('crypto_type', $cryptoType)->first();
            
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->get('https://api.cryptoapis.io/v1/bc/eth/ropsten/address/'.$address->address);
            
            $data = json_decode($response->body());
            return $data->payload->balance;
        }
        else if($cryptoType == 'USDT'){        // get the addresses and values of USDT wallet.
            $address = WalletInfo::where('wallet_name', $walletName)->where('crypto_type', $cryptoType)->first();
            
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->get('https://api.cryptoapis.io/v1/bc/btc/testnet/address/'.$address->address);
            
            $data = json_decode($response->body());
            return $data->payload->balance;
        }
    }

    public function generateAddress($cryptoType) {
        if($cryptoType == 'ETH')
        {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->post("https://api.cryptoapis.io/v1/bc/eth/ropsten/address");
            
            $data = json_decode($response->body());
            return $data;
        }
        if($cryptoType == 'USDT')
        {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-Key' => env('CRYPTOAPIS_KEY')
            ])->post("https://api.cryptoapis.io/v1/bc/btc/testnet/address");
    
            $data = json_decode($response->body());
            return $data;
        }
    }
    
}
