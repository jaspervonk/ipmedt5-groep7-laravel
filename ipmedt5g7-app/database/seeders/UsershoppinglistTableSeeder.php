<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsershoppinglistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usershoppinglist')->insert([
            'user' => 'Algemeen',
            'shoppinglist' => "Default",
        ]);
    }
}
