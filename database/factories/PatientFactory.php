<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => User::factory(),
            'full_name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 25),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'birthday' => $this->faker->date(),
            'address' => $this->faker->address(),
            'municipal' => $this->faker->city(),
            'religion' => $this->faker->randomElement(['Christianity', 'Islam', 'Hinduism', 'Buddhism', 'Others']),
            'occupation' => $this->faker->jobTitle(),
            'phone_number' => $this->faker->phoneNumber(),
            'civil_status' => $this->faker->randomElement(['Single', 'Married', 'Divorced', 'Widowed']),
        ];

    }
}
