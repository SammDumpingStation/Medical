<?php

namespace Database\Seeders;

use App\Models\Dental;
use Illuminate\Database\Seeder;

class DentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = [
            'Paracetamol',
            'Amoxicillin',
            'Ibuprofen',
        ];
        $dates = [
            '500mg',
            '250mg',
            '200mg',
        ];
        $names = [
            '3 times a day',
            '2 times a day',
            'As Needed',
        ];

        $start_dates = [
            '2024-01-10',
            '2024-02-15',
            '2024-03-01',
        ];
        $end_dates = [
            '2024-01-20',
            '2024-02-25',
            '2024-03-10',
        ];

        foreach ($types as $index => $type) {
            Dental::create([
                'type' => $type,
                'dates' => $dates[$index],
                'names' => $names[$index],
                'start_dates' => $start_dates[$index],
                'end_dates' => $end_dates[$index],
            ]);
        }

    }
}
