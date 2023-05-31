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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('app_date')->nullable();
            $table->string('app_time')->nullable();
            $table->foreignId('depart_id');
            $table->foreignId('doctor_id');
            $table->string('pt_name')->nullable();
            $table->string('pt_phone')->nullable();
            $table->string('pt_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
