<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ShoppinglistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shoppinglist')->insert([
            'product' => "Volle melk",
            'merk' => "Campina",
            'aantal' => 2,
            'volume' => "1 liter",
        ]);
    }
}
