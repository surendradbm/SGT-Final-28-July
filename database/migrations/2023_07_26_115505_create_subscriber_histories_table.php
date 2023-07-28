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
        Schema::create('subscriber_histories', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->bigInteger('user_type');
            $table->bigInteger('subscription_id');
            $table->string('subscription_title');
            $table->string('subscription_description');
            $table->string('trial_type')->comment("0 = Paid Subscription, 1 = Free Subscription");
            $table->string('status')->comment("	0 = Inactive, 1 = Active");
            $table->string('trial_days')->nullable();
            $table->string('monthly_plan');
            $table->string('monthly_price');
            $table->string('discounted_monthly_price_type')->comment("1 = Fixed, 2 = Percentage");
            $table->string('discounted_monthly_price')->nullable();
            $table->string('yearly_plan');
            $table->string('discounted_yearly_price_type')->comment("1 = Fixed, 2 = Percentage");
            $table->string('discounted_yearly_price')->nullable();
            $table->string('maximum_property');
            $table->string('maximum_shift');
            $table->string('maximum_checkpoint');
            $table->string('maximum_guards');
            $table->string('messenger');
            $table->string('address');
            $table->string('postal_code');
            $table->string('city_name');
            $table->string('state_name');
            $table->string('country_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriber_histories');
    }
};
