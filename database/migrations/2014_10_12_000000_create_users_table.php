<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('avatar')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('otp')->unique()->nullable();
            $table->string('otp_created_at')->unique()->nullable();
            $table->string('otp_expired_at')->unique()->nullable();
            $table->enum('user_type', ['0', '1', '2'])->comment('user_type => 0 = SuperAdmin, 1 = PropertyOwner, 2 = Guard')->nullable();
            $table->string('token')->nullable();
            $table->string('token_expires_at')->nullable();
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
};
