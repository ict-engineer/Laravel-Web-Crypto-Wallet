<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_info', function (Blueprint $table) {
            $table->id();
            $table->string('wallet_name');
            $table->integer('user_id');
            $table->string('crypto_type'); 
            $table->string('address');
            $table->text('private_key');
            $table->string('public_key');
            $table->string('wif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_info');
    }
}
