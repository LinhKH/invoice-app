<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->numberBetween(10,1000),
            'customer_id' => $this->faker->numberBetween(1,5),
            'date' => $this->faker->date(),
            'due_date' => $this->faker->date(),
            'sub_total'=> $this->faker->numberBetween(100,1000),
            'discount'=> $this->faker->numberBetween(10,100),
            'grand_total'=> $this->faker->numberBetween(200,2000),

        ];
    }
}
