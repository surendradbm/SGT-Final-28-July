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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('avatar');
            $table->string('subscription_title');
            $table->string('subscription_description')->nullable();
            $table->enum('trial_type',['0','1'])->comment(' 0 = Paid Subscription, 1 = Free Subscription,');
            $table->enum('status',['0','1'])->comment(' 0 = Inactive, 1 = Active,');
            $table->bigInteger('trial_days')->nullable();
            $table->bigInteger('monthly_price')->nullable();
            $table->bigInteger('yearly_price')->nullable();
            $table->enum('discounted_monthly_price_type',['1','2'])->nullable()->comment(' 1 = Fixed, 2 = Percentage');
            $table->enum('discounted_yearly_price_type',['1','2'])->nullable()->comment(' 1 = Fixed, 2 = Percentage');
            $table->bigInteger('discounted_monthly_price')->nullable();
            $table->bigInteger('discounted_yearly_price')->nullable();
            $table->bigInteger('maximum_property');
            $table->bigInteger('maximum_shift');
            $table->bigInteger('maximum_checkpoint');
            $table->bigInteger('maximum_guards');
            $table->enum('messenger',['0','1'])->comment(' 0 = Disable Messenger Feature, 1 = Enable Messenger Feature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
