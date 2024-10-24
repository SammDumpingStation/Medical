<?php

namespace Database\Seeders;

use App\Models\MedicineRecord;
use Illuminate\Database\Seeder;

class MedicineRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Paracetamol',
            'Amoxicillin',
            'Ibuprofen',
        ];
        $dosage = [
            '500mg',
            '250mg',
            '200mg',
        ];
        $frequency = [
            '3 times a day',
            '2 times a day',
            'As Needed',
        ];

        $start_date = [
            '2024-01-10',
            '2024-02-15',
            '2024-03-01',
        ];
        $end_date = [
            '2024-01-20',
            '2024-02-25',
            '2024-03-10',
        ];

        foreach ($names as $index => $name) {
            MedicineRecord::create([
                'name' => $name,
                'dosage' => $dosage[$index],
                'frequency' => $frequency[$index],
                'start_date' => $start_date[$index],
                'end_date' => $end_date[$index],
            ]);
        }

    }
}
