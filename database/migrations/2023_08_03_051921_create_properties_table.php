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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_owner_id');
            $table->foreign('property_owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('avatar');
            $table->string('name');
            $table->string('type')->comment('1 = Residential Property, 2 = Commercial Property, 3 = Healthcare Property, 4 = Educational Property, 5 = Office Property, 6 = Hotel Property, 7 = Government Property, 8 = Financial Property, 9 = Other Property');
            $table->string('area');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('contact_name_1')->nullable();
            $table->string('contact_number_1')->nullable();
            $table->string('contact_name_2')->nullable();
            $table->string('contact_number_2')->nullable();
            $table->string('contact_name_3')->nullable();
            $table->string('contact_number_3')->nullable();
            $table->string('contact_name_4')->nullable();
            $table->string('contact_number_4')->nullable();
            $table->string('contact_name_5')->nullable();
            $table->string('contact_number_5')->nullable();
            $table->string('property_description');
            $table->string('location');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('status')->nullable()->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
