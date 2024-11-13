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
        Schema::create('patient_histories', function (Blueprint $table) {
            $table->string('patient_id')->primary(); // Primary key as 'patient_id'
            $table->foreign('patient_id')->references('patient_id')->on('users')->onDelete('cascade');
            $table->date('date_of_visit'); // Date of Visit
            $table->time('time_of_visit'); // Time of Visit
            $table->string('reason'); // Reason for Visit
            $table->text('symptoms'); // Symptoms Experienced
            $table->text('treatment'); // Treatment/Advice Provided
            $table->text('prescribed_medications')->nullable(); // Medications Prescribed
            $table->string('outcome_of_visit'); // Outcome of Visit
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_histories');
    }
};
