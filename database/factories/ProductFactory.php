<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_code' => 'IC-1000' . rand(10,500),
            'category_id' => $this->faker->numberBetween(1,3),
            'description' => 'Name of Product' . rand(10, 500),
            'price' =>  rand(100, 1000),
            'unit' => $this->faker->randomElement(['kg', 'pcs', 'pack'])
        ];
    }
}
