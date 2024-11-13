<?php

use App\Models\immunizations;
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
        Schema::create('covid19_booster_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(immunizations::class);
            $table->integer('booster_stage'); // 1, 2, etc.
            $table->string('brand_name'); // e.g., Pfizer, Moderna, etc.
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covid19_booster_details');
    }
};
