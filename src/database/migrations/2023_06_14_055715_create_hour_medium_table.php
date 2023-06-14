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
        Schema::create('hour_medium', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hour_id')->constrained('hours')->comment("学習時間ID");
            $table->foreignId('medium_id')->constrained('media')->comment("学習媒体ID");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hour_medium');
    }
};