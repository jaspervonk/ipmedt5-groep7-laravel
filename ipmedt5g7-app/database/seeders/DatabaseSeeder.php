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
<<<<<<< HEAD
            cijferTableSeeder::class,
=======
            AllDeskjobsTableSeeder::class,
            ActiveDeskjobTableSeeder::class,
>>>>>>> 90ea1e9e49c3117bc5533ee39e8ecd1801e3b682
        ]);
    }
}
