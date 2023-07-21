<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'inStock' => $this->faker->numberBetween(0, 100),
            'image' => $this->faker->imageUrl($width =640, $height=480),
            'certife' => $this->faker->boolean(),
            'datecetif' => $this->faker->date(),
            'category_id' => function () {
                return category::factory()->create()->id;
            }
        ];
    }
}
