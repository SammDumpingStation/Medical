<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Random word for item name
            'acquired_at' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'), // Random date within the past year
            'no_of_pieces' => $this->faker->numberBetween(1, 100), // Random number of pieces
            'status' => $this->faker->randomElement(['Available', 'In Use', 'Out of Stock']), // Random status
            'turn_over_to_supply' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'), // Random integer for supply turnover
            'damaged' => $this->faker->randomElement(['Yes', 'No', 'Not Used']), // Random boolean (true or false) for damaged status
        ];

    }
}
