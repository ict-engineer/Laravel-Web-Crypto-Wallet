<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletInfo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'wallet_info';
    protected $fillable = [
        'wallet_name', 'user_id', 'crypto_type', 'address', 'public_key', 'private_key', 'wif'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
}
