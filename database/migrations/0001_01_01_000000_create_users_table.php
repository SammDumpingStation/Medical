<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the users table
        Schema::create('users', function (Blueprint $table) {
            $table->string('patient_id')->primary();
            $table->string('is_staff');
            $table->string('role');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Insert a test user account
        DB::table('users')->insert([
            'patient_id' => 'testpatient001',  // This will be the primary key
            'is_staff' => 'no',  // You can set this as per your requirements
            'role' => 'user',    // Example role, modify as needed
            'password' => Hash::make('testpassword123'),  // Hashed password
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Create other tables if needed
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
