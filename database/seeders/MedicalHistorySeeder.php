<?php
namespace Database\Seeders;

use App\Models\MedicalHistory;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MedicalHistorySeeder extends Seeder
{
    public function run(): void
    {
        // Get all patients
        $patients = Patient::all();

        if ($patients->isEmpty()) {
            $this->command->info('No patients found. Please run Patient seeder first.');
            return;
        }

        $conditions = [
            'allergy',
            'asthma',
            'cancer',
            'coronary_artery_disease',
            'thyroid_disease',
            'peptic_ulcer',
            'pcos',
            'hypertension',
            'epilepsy',
            'skin_disorder',
            'tuberculosis',
            'hepatitis',
            'psychological_disorder'
        ];

        foreach ($patients as $patient) {
            // Create medical history with random boolean values for each condition
            $medicalData = ['patient_id' => $patient->patient_id];
            
            foreach ($conditions as $condition) {
                $medicalData[$condition] = (bool) rand(0, 1);
            }

            // Randomize created_at within the last 2 years
            $randomDays = rand(0, 730); // 2 years in days
            $createdAt = now()->subDays($randomDays);
            
            $medicalData['created_at'] = $createdAt;
            $medicalData['updated_at'] = $createdAt;

            MedicalHistory::create($medicalData);
        }


        $this->command->info('Medical history records generated successfully!');
    }
}
