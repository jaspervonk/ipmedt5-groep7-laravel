<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recepten')->insert([
            'naam' => 'Ontbijtcake',
            'soort' => 'ontbijt',
            'ingredienten' => '100 gram (spelt)bloem, 100 gram amandelmeel, 75 gram palmsuiker, 1 eetlepel kokosolie',
            'bereiden' => 'Meng de droge ingrediënten in een kom. Dit is de bloem, amandelmeel, het bakpoeder, de specerijen en het zout. Met een vork meng je dit goed met elkaar.',
        ]);
    }
}
