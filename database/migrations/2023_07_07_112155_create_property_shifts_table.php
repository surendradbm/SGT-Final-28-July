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
        Schema::create('property_shifts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('clock_in_time');
            $table->time('clock_out_time');
            $table->string('Desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_shifts');
    }
};
