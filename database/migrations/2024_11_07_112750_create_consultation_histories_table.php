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
        Schema::create('consultation_histories', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('primary_diagnosis');
            $table->enum('status', ['Pending', 'Ongoing', 'Completed', 'Cancelled']);
            $table->date('date');
            $table->time('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_histories');
    }
};
