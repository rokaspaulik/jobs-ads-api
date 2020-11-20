<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JobAd;
use App\JobAdTranslation;
use Faker\Generator as Faker;

$factory->define(JobAdTranslation::class, function (Faker $faker) {
    return [
        "job_ad_id" => factory(JobAd::class),
        "language_code" => "lt",
        "title" => Str::random(10),
        "description" => $faker->text(200)
    ];
});