<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\purchase_products;
use Illuminate\Database\Seeder;

class PurchaseProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        purchase_products::factory()->count(2000)->create();

    }
}
