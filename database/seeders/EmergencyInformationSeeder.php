<?php

namespace Database\Seeders;

use App\Models\EmergencyInformation;
use Illuminate\Database\Seeder;

class EmergencyInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmergencyInformation::factory(50)->create();
    }
}
