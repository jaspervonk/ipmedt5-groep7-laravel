<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class WekkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weekdayArray = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];

        foreach($weekdayArray as $weekday){
            DB::table('wekkers')->insert([
                'day' => $weekday,
                'hours' => 12,
                'minutes' => 0
            ]);
        }
    }
}
