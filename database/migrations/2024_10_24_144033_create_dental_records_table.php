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
        Schema::create('dental_records', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('surname');
            $table->string('given_name');
            $table->string('middle_name')->nullable();
            $table->text('address');
            $table->string('course_year')->nullable();
            $table->enum('sex', ['male', 'female', 'other']);
            $table->string('civil_status');
            $table->integer('age');
            $table->string('tel_no')->nullable();
            $table->date('dob');
            $table->text('allergy')->nullable();
            $table->text('medical_treatment')->nullable();
            $table->text('taking_drugs')->nullable();
            $table->text('special_diet')->nullable();
            $table->boolean('shortness_breath')->default(false);
            $table->text('complication_healing')->nullable();
            $table->text('general_health')->nullable();
            $table->boolean('pregnant')->default(false);
            $table->boolean('profuse_bleeding')->default(false);
            $table->text('major_operation')->nullable();
            $table->boolean('sweat_nights')->default(false);
            $table->boolean('heart_ailment')->default(false);
            $table->boolean('high_blood_pressure')->default(false);
            $table->boolean('diabetes')->default(false);
            $table->boolean('rheumatic_fever')->default(false);
            $table->boolean('lung_disease')->default(false);
            $table->boolean('liver_disease')->default(false);
            $table->string('signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dental_records');
    }
};
