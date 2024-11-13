<?php

use App\Models\PhysicalExamination;
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
        Schema::create('physical_examination_findings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PhysicalExamination::class);
            $table->text('body_part');
            $table->text('findings');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physical_examination_findings');
    }
};
