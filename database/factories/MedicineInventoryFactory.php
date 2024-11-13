<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicineInventory>
 */
class MedicineInventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => $this->faker->word(),
            'brand_name' => $this->faker->company(), // assuming brand name can be a company name
            'dosage' => $this->faker->randomElement(['5mg', '10mg', '250mg', '500mg']),
            'manufactured_date' => $this->faker->dateTimeBetween('-2 years', '-1 year')->format('Y-m-d'),
            'expiry' => $this->faker->dateTimeBetween('+6 months', '+2 years')->format('Y-m-d'),
            'turn_over_to_supply' =>  $this->faker->dateTimeBetween('-2 years', '-1 year')->format('Y-m-d'),
            'stock_on_hand' => $this->faker->numberBetween(0, 200),
            'dispensed' => $this->faker->numberBetween(0, 50),
            'status' => $this->faker->randomElement(['Available', 'Low Stock', 'Out of Stock']),
        ];
    }
}
