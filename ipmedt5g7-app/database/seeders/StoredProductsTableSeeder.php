<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StoredProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stored_products')->insert([
            'EAN' => 8718906105560,
            'product' => "Reep hazelnoot-melk",
            'merk' => "Delicata",
            'volume' => "200 gram",
            'prijs' => 1.99,
        ]);
        DB::table('stored_products')->insert([
            'EAN' => 8719179340221,
            'product' => "MULTI A-Z compleet",
            'merk' => "Kruidvat",
            'volume' => "80 gram",
            'prijs' => 2.99,
        ]);
    }
}
