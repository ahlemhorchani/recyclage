<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'qty' => $this->faker->numberBetween(0, 1000),
            'total' => $this->faker->numberBetween(0, 90000),
            'delivered' => $this->faker->boolean(),
            'user_id' => function () {
                return User::factory()->create()->id;
            },
        ];
    }
}
