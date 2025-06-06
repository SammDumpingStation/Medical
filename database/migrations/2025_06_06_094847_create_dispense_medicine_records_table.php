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
        Schema::create('dispense_medicine_records', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('medicine_name');
            $table->integer('quantity');
            $table->string('dosage');
            $table->text('notes')->nullable();
            $table->foreign('patient_id')->references('patient_id')->on('patients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispense_medicine_records');
    }
};
