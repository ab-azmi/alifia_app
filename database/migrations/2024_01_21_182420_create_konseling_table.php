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
        Schema::create('konseling', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('psikolog_id');
            $table->string('phone');
            $table->integer('gender'); // 1 for Male, 2 for Female
            $table->string('address');
            $table->integer('category'); // 1 for Online, 2 for Offline
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konseling');
    }
};