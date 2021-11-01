<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class purchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        $customers = Customer::all()->pluck('id')->toArray();

        return [
            'customer_id' => $this->faker->randomElement($customers)
        ];
    }
}
