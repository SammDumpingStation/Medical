<?php

namespace Database\Factories;

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
            'patient_id' => User::inRandomOrder()->first()->patient_id,
            'patient_name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 90),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'year_level' => $this->faker->randomElement(['1st Year', '2nd Year', '3rd Year', '4th Year']),
            'department' => $this->faker->randomElement($departments),
            'primary_diagnosis' => $this->faker->randomElement($diagnoses),
            'status' => $this->faker->randomElement(['Pending', 'Ongoing', 'Completed', 'Cancelled']),
            'date' => $this->faker->date,
            'time' => $this->faker->time,
        ];

    }
}
