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
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->string('patient_id')->primary(); // Primary key as 'patient_id'
            $table->foreign('patient_id')->references('patient_id')->on('users')->onDelete('cascade');

            $table->boolean('allergy')->default(false);
            $table->boolean('asthma')->default(false);
            $table->boolean('cancer')->default(false);
            $table->boolean('coronary_artery_disease')->default(false);
            $table->boolean('thyroid_disease')->default(false);
            $table->boolean('peptic_ulcer')->default(false);
            $table->boolean('pcos')->default(false);
            $table->boolean('hypertension')->default(false);
            $table->boolean('epilepsy')->default(false);
            $table->boolean('skin_disorder')->default(false);
            $table->boolean('tuberculosis')->default(false);
            $table->boolean('hepatitis')->default(false);
            $table->boolean('psychological_disorder')->default(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_histories');
    }
};
