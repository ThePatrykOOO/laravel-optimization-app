<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->realText(500),
            'short_description' => $this->faker->sentence,
            'price' => $this->faker->numberBetween(10,4000),
            'active' => $this->faker->boolean,
            'category_id' => $this->faker->randomElement(Category::all()->pluck('id')),
            'product_weight' => $this->faker->numberBetween(1,100),
            'product_width' => $this->faker->numberBetween(1,100),
            'product_height' => $this->faker->numberBetween(1,100),
        ];
    }
}
