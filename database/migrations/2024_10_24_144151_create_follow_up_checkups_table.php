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
        Schema::create('follow_up_checkups', function (Blueprint $table) {
            $table->id();
            $table->string('follow_up_date');
            $table->string('checkup_details');
            $table->string('recommendations');
            $table->string('patient_name');
            $table->string('patient_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow_up_checkups');
    }
};
