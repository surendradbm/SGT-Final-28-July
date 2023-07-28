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
            $table->string('image');
            $table->string('name');
            $table->string('property_type');
            $table->string('property_area');
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('contact_name');
            $table->string('conatact_no');
            $table->string('prop_desc');
            $table->string('location');
            $table->string('lati');
            $table->string('long');
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
