<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('subscription_id');
            $table->foreign('subscription_id')->references('id')->on('subscriptions')->onDelete('cascade');
            $table->bigInteger('monthly_plan')->nullable()->comment("1 means Monthly");
            $table->bigInteger('yearly_plan')->nullable()->comment("0 means Yearly");
            $table->integer('monthly_price');
            $table->integer('yearly_price');
            $table->string('address');
            $table->integer('postal_code');
            $table->bigInteger('city_id');
            $table->bigInteger('state_id');
            $table->bigInteger('country_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribers');
    }
};
