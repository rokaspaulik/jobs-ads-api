<?php

use Illuminate\Database\Seeder;

use App\JobAd;

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

        factory(\App\JobAd::class, 50)->create();
    }
}
