<?php

namespace Database\Seeders;

use App\Models\ConsultationHistory;
use Illuminate\Database\Seeder;

class ConsultationHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConsultationHistory::factory(50)->create();
    }
}
