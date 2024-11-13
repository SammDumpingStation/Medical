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
        Schema::create('medicine_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('brand_name');
            $table->string('dosage');
            $table->date('manufactured_date');
            $table->date('expiry');
            $table->date('turn_over_to_supply');
            $table->integer('stock_on_hand');
            $table->integer('dispensed');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_inventories');
    }
};
