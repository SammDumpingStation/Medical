<?php

use App\Models\AppendixA;
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
        Schema::create('ancillary_examinations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppendixA::class);
            $table->boolean('complete_blood_count')->default(false);
            $table->boolean('fecalysis')->default(false);
            $table->boolean('pregnancy_test')->default(false);
            $table->text('urinalysis')->nullable();
            $table->text('chest_xray')->nullable();
            $table->boolean('hep_b')->default(false);
            $table->char('blood_type', 3)->nullable();
            $table->text('mmse_score')->nullable(); // normal, with findings for further evaluation
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ancillary_examinations');
    }
};
