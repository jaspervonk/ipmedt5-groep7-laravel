<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class activeshoppinglistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activeshoppinglist')->insert([
            'activeshoppinglist' => "Default",
        ]);
    }
}
