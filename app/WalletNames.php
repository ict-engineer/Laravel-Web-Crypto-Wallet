<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletNames extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'wallet_names';
    protected $fillable = [
        'user_id', 'crypto_type', 'wallet_name', 'password'
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
