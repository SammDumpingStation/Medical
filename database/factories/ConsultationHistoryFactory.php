<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConsultationHistory>
 */
class ConsultationHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = [
            'CEA', 'CITC', 'CBA', 'CAS', 'CEd', 'CN', 'CM', 'CL', 'CD', 'CP',
            'CVM', 'CA', 'CF', 'CF', 'CE', 'CCS', 'CHTM', 'CC', 'CoA', 'CFA',
            'CIT', 'CME', 'CPA', 'CSWCD', 'CHK',
        ];
        $diagnoses = [
            'Influenza (Flu)', 'Common Cold', 'Strep Throat', 'UTI', 'Bronchitis', 'Sinusitis',
            'Conjunctivitis', 'Gastroenteritis', 'Otitis Media', 'Hypertension', 'Type 2 Diabetes',
            'Arthritis', 'Back Pain', 'Headache/Migraine', 'Allergies', 'Rash/Dermatitis',
            'Sprains and Strains', 'Lacerations/Wounds', 'Viral Gastroenteritis', 'Insomnia',
            'Depression', 'Anxiety', 'Hypothyroidism', 'High Cholesterol', 'Anemia',
        ];

        return [
            'patient_id' => Patient::factory(),
            'primary_diagnosis' => $this->faker->randomElement($diagnoses),
            'status' => $this->faker->randomElement(['Pending', 'Ongoing', 'Completed', 'Cancelled']),
            'date' => $this->faker->date,
            'time' => $this->faker->time,
        ];

    }
}
