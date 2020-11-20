<?php

use Illuminate\Database\Seeder;

use App\JobAd;
use App\JobAdTranslation;

class JobAdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobAd::truncate();
        JobAdTranslation::truncate();

        factory(\App\JobAdTranslation::class, 50)->create();
    }
}
