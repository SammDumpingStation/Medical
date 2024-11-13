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
        Schema::create('physical_examinations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppendixA::class);
            $table->boolean('skin')->default(false);
            $table->boolean('head_neck_scalp')->default(false);
            $table->boolean('external_eyes')->default(false);
            $table->boolean('pupils_opthalmoscopic')->default(false);
            $table->boolean('ears_nose_sinuses')->default(false);
            $table->boolean('mouth_throat')->default(false);
            $table->boolean('neck_lymphnodes_throid')->default(false);
            $table->boolean('chest_breast_axilla')->default(false);
            $table->boolean('lungs')->default(false);
            $table->boolean('heart_and_valvular')->default(false);
            $table->boolean('back_and_abdomen')->default(false);
            $table->boolean('genitalia')->default(false);
            $table->boolean('anus_rectum')->default(false);
            $table->boolean('extremities')->default(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physical_examinations_details');
    }
};
