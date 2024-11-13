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
        Schema::create('vaccination_refusal_reasons', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(immunizations::class);
            $table->text('reasons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccination_refusal_reasons');
    }
};
