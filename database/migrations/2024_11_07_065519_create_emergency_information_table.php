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
            $table->string('school_id')->primary(); // Primary key as 'school_id'
            $table->foreign('school_id')->references('school_id')->on('users')->onDelete('cascade'); // Foreign key to 'users'
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
