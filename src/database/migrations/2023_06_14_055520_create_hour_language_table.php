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
        Schema::create('hour_language', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hour_id')->constrained('hours')->comment("学習時間ID");
            $table->foreignId('language_id')->constrained('languages')->comment("言語ID");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hour_language');
    }
};
