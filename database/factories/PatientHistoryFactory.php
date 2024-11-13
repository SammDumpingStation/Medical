<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PatientHistory>
 */
class PatientHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'date_of_visit' => $this->faker->date(),
            'time_of_visit' => $this->faker->time(),
            'reason' => $this->faker->sentence(3), // e.g., "headache", "fever", etc.
            'symptoms' => $this->faker->sentence(6), // e.g., "persistent headache and dizziness"
            'treatment' => $this->faker->sentence(8), // e.g., "advised rest and hydration"
            'prescribed_medications' => $this->faker->optional()->words(3, true), // e.g., "ibuprofen, paracetamol"
            'outcome_of_visit' => $this->faker->randomElement(['Resolved', 'Follow-up needed', 'Referred']),
        ];
    }
}
