<?php

use App\Models\StudentClassification;
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
        Schema::create('appendix_a_s', function (Blueprint $table) {
            $table->string('patient_id')->primary(); // Primary key as 'patient_id'
            $table->foreign('patient_id')->references('patient_id')->on('users')->onDelete('cascade');
            $table->foreignIdFor(StudentClassification::class);
            $table->string('file_number');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appendix_a_s');
    }
};
