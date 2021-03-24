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
<<<<<<< HEAD
        $this->call([
            SoortReceptSeeder::class,
            ReceptSeeder::class,
        ]);
=======
        // \App\Models\User::factory(10)->create();
        $this->call(ShoppinglistTableSeeder::class);
>>>>>>> Max(groceries)
    }
}
