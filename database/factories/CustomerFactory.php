<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'first_name' => $this->faker->name(),
            'middle_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'photo' => $this->faker->randomElement(['image1.jpg', 'image2.jpg', 'image3.jpg']),
        ];
    }
}
