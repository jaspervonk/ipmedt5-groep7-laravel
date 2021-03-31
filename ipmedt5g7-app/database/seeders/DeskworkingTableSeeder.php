<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class DeskworkingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deskworking')->insert([
            'working_status' => "niet aan het werken",
        ]);
    }
}
