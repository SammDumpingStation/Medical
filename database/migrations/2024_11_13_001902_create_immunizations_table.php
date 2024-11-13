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
        Schema::create('immunizations', function (Blueprint $table) {
            $table->string('patient_id')->primary(); // Primary key as 'patient_id'
            $table->foreign('patient_id')->references('patient_id')->on('users')->onDelete('cascade');
            $table->boolean('newborn_immunization')->nullable(); // 0: no, 1: yes, 2: unknown
            $table->boolean('HPV')->nullable(); // For women, additional details in HPV_details
            $table->boolean('tetanus_toxoid')->nullable(); // Additional details in tetanus_toxoid_doses
            $table->boolean('influenza_or_flu')->nullable(); // Additional details in influenza_dose_year
            $table->boolean('pneumococcal_vaccine')->nullable();
            $table->boolean('is_covid19_vaccinated')->nullable();
            $table->boolean('has_covid19_booster')->nullable();
            $table->string('others')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immunizations');
    }
};
