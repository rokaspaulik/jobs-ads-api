<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JobAd;
use Faker\Generator as Faker;

$factory->define(JobAd::class, function (Faker $faker) {
    return [
        "title" => Str::random(10),
        "description" => $faker->text(200),
        "salary" => $faker->numberBetween(70000, 400000),
        "area_id" => $faker->numberBetween(1, 5)
    ];
});
