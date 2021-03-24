<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SoortReceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soort_recept_array = ['ontbijt', 'lunch', 'diner', 'dessert'];

        foreach($soort_recept_array as $soort_recept){
            DB::table('soort_recept')->insert([
                'soort' => $soort_recept
            ]);
        
        }
    }
}
