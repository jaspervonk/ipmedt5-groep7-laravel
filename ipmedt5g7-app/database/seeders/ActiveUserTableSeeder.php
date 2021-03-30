<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ActiveUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activeUser')->insert([
            'name' => "Algemeen",
        ]);
    }
}
