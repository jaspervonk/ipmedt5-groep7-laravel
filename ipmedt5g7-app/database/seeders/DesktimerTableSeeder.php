<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class DesktimerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desktimer')->insert([
            'seconds' => 0
        ]);
    }
}
