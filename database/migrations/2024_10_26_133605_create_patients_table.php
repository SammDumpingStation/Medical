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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age_sex');
            $table->date('birthday');
            $table->string('home_address');
            $table->string('religion')->nullable();
            $table->string('municipal_address');
            $table->string('occupation');
            $table->string('contact_number');
            $table->string('civil_status');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_number');
            $table->string('emergency_contact_address');
            $table->string('emergency_contact_relationship');
            $table->string('college_year');
            $table->string('college_department');
            $table->string('college_course');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
        Schema::dropIfExists('users');

    }
};
