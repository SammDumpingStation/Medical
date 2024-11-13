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
        Schema::create('h_p_v_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(immunizations::class);
            $table->text('details');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_p_v_details');
    }
};
