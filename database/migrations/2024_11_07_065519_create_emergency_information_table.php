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
        Schema::create('emergency_information', function (Blueprint $table) {
            $table->string('patient_id')->primary(); // Primary key as 'patient_id'
            $table->foreign('patient_id')->references('patient_id')->on('users')->onDelete('cascade'); // Foreign key to 'users'
            $table->string('contact_person');
            $table->text('address');
            $table->string('phone_number');
            $table->string('relationship')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_information');
    }
};
