<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::truncate();

        Area::create(['area' => 'Vilnius']);
        Area::create(['area' => 'Kaunas']);
        Area::create(['area' => 'Klaipėda']);
        Area::create(['area' => 'Šiauliai']);
        Area::create(['area' => 'Panevėžys']);
    }
}
