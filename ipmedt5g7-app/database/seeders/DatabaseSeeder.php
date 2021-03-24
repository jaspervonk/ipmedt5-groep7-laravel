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
        $this->call([
            SoortReceptSeeder::class,
            ReceptSeeder::class,
            ShoppinglistTableSeeder::class,
            DeskworkingTableSeeder::class,
            DesktimerTableSeeder::class,
        ]);
    }
}
