<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmergencyInformation>
 */
class EmergencyInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_id' => Student::factory(),
            'contact_person' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'relationship' => $this->faker->randomElement(['Parent', 'Sibling', 'Spouse', 'Friend', 'Other']),
        ];

    }
}
