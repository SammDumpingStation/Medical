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
        Schema::create('physical_screenings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppendixA::class);
            $table->text('height')->nullable();
            $table->text('weight')->nullable();
            $table->text('blood_pressure')->nullable();
            $table->text('pulse_rate')->nullable();
            $table->text('respiration')->nullable();
            $table->text('spo2')->nullable();
            $table->text('BMI')->nullable();
            $table->text('BMI_class')->nullable();
            $table->text('visual_acuity')->nullable(); // corrected, uncorrected
            $table->text('right_vision')->nullable();
            $table->text('left_vision')->nullable();
            $table->text('ishihara_color_vision')->nullable();
            $table->text('tuning_fork_ad')->nullable(); // adequate, inadequate
            $table->text('tuning_fork_as')->nullable(); // adequate, inadequate
            $table->text('speech')->nullable(); // clear, unclear
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physical_screenings');
    }
};
