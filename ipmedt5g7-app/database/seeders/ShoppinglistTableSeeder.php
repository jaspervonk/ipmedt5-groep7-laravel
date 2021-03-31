<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\ActiveUserTable;
use DB;

class ShoppinglistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\App\Models\activeUserTable $activeUser)
    {
        DB::table('shoppinglist')->insert([
            'product' => "Volle melk",
            'merk' => "Campina",
            'aantal' => 2,
            'volume' => "1 liter",
            // 'user' => $activeUser->name
        ]);
        DB::table('shoppinglist')->insert([
            'product' => "Naturel Chips",
            'merk' => "Lays",
            'volume' => "225 gram",
            // 'user' => $activeUser->name
        ]);
    }
}
