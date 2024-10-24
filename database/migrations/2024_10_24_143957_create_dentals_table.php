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
        Schema::create('dentals', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Non-Teaching', 'Teaching', 'Student']);
            $table->date('date');
            $table->string('name');
            $table->integer('age');
            $table->text('address');
            $table->string('tel_no');
            $table->string('course_taken_year');
            $table->string('dob');
            $table->enum('sex', ['Male', 'Female', 'Other']);
            $table->enum('civil_status', ['Single', 'Married', 'Divorced', 'Widowed', 'Other']);
            $table->text('allergy_medication_food');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentals');
    }
};
