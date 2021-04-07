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
            ActiveUserTableSeeder::class,
            ShoppinglistTableSeeder::class,
            DeskworkingTableSeeder::class,
            DesktimerTableSeeder::class,
            WekkersTableSeeder::class,
            SleepgunscoresTableSeeder::class,
        ]);
    }
}
