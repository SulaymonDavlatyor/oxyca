<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(null, 0, 1000),
            'sku' => $this->faker->unique()->numberBetween(0, 10000),
            'photo' => $this->faker->randomElement(['images/image1.jpg', 'images/image2.jpg', 'images/image3.jpg']),
        ];
    }
}
