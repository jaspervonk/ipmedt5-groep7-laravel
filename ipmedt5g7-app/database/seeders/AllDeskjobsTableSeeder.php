<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AllDeskjobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('all_deskjobs')->insert([
            'deskjob' => "Algemeen",
        ]);
    }
}
