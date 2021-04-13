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
            UserTableSeeder::class,
            ActiveUserTableSeeder::class,
            SoortReceptSeeder::class,
            ReceptSeeder::class,
            UsershoppinglistTableSeeder::class,
            ShoppinglistTableSeeder::class,
            DeskworkingTableSeeder::class,
            DesktimerTableSeeder::class,
            cijferTableSeeder::class,
            AllDeskjobsTableSeeder::class,
            ActiveDeskjobTableSeeder::class,
            WekkersTableSeeder::class,
            SleepgunscoresTableSeeder::class,
            StoredProductsTableSeeder::class,
            activeshoppinglistTableSeeder::class,
        ]);
    }
}
