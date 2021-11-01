<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class purchase_productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $products = Product::all()->pluck('id')->toArray();
        $purchases = purchase::all()->pluck('id')->toArray();
        return [
            'product_id' => $this->faker->randomElement($products),
            'purchase_id' => $this->faker->randomElement($purchases)
        ];
    }
}
