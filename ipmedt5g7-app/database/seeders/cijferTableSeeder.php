<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class cijferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cijfer')->insert([
            'waarde' => 0,
        ]);
    }
}
