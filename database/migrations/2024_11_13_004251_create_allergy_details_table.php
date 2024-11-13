<?php

use App\Models\MedicalHistory;
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
        Schema::create('allergy_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MedicalHistory::class);
            $table->string('allergy_type');
            $table->string('allergen_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allergy_details');
    }
};
