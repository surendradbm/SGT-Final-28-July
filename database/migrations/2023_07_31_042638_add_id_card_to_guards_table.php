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
        Schema::table('guards', function (Blueprint $table) {
            $table->string('front_side_id_card')->after('password');
            $table->string('back_side_id_card')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('guards', function (Blueprint $table) {
            //
        });
    }
};
