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
        Schema::create('students', function (Blueprint $table) {
            $table->string('school_id')->primary(); // Primary key as 'school_id'
            $table->foreign('school_id')->references('school_id')->on('users')->onDelete('cascade'); // Foreign key to 'users'
            $table->string('full_name');
            $table->integer('age');
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->text('address');
            $table->string('municipal');
            $table->string('religion');
            $table->string('occupation');
            $table->string('phone_number');
            $table->string('civil_status')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
