<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('organization_name')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('website_url')->nullable();
            $table->string('yearly_revenue')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type');
            $table->string('account_id')->nullable();
            $table->string('profile_completed')->nullable();
            $table->string('identity_verified')->nullable();
            $table->string('payment_verified')->nullable();
            $table->string('phone_verified')->nullable();
            $table->string('email_verified')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
