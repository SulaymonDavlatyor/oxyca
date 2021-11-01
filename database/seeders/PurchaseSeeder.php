<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\purchase;
use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        purchase::factory()->count(5000)->create();
    }

}
