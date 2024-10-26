<?php

namespace Database\Factories;

use App\Models\Authentication;
use Illuminate\Database\Eloquent\Factories\Factory; // Import the Authentication model
use Illuminate\Support\Str;

class AuthenticationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Authentication::class; // Set the model explicitly

    public function definition()
    {
        return [
            'id_number' => $this->faker->unique()->numerify('ID####'),
            'password' => bcrypt('admin123'),
            'role' => $this->faker->randomElement(['patient', 'nurse', 'doctor']),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
