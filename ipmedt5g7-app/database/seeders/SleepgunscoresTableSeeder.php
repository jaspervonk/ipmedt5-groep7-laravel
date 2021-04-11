<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SleepgunscoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sleepgunscores')->insert([
            'user' => "Algemeen",
            'date' => "11/6/2020 12:00",
            'totalTime' => 3.500,
            'targetTotal' => 10,
            'targetHits' => 5,
            'targetMisses' => 5,
            'targetAccuracy' => 50.00,
            'targetReactionTime' => 350,
        ]);

        DB::table('sleepgunscores')->insert([
            'user' => "Algemeen",
            'date' => "12/5/2020 11:40",
            'totalTime' => 3.000,
            'targetTotal' => 10,
            'targetHits' => 5,
            'targetMisses' => 5,
            'targetAccuracy' => 50.00,
            'targetReactionTime' => 300,
        ]);

        DB::table('sleepgunscores')->insert([
            'user' => "Algemeen",
            'date' => "4/6/2021 10:30",
            'totalTime' => 4.000,
            'targetTotal' => 10,
            'targetHits' => 6,
            'targetMisses' => 4,
            'targetAccuracy' => 50.00,
            'targetReactionTime' => 400,
        ]);
    }
}
