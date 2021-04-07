<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ActiveDeskjobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('active_deskjob')->insert([
            'deskjob' => "Algemeen",
        ]);
    }
}
