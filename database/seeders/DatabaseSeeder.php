<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PurchaseSeeder::class);
        $this->call(PurchaseProductsSeeder::class);


        // \App\Models\User::factory(10)->create();
    }
}
