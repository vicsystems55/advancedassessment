<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WeightDeviation;
use Faker\Generator as Faker;

$factory->define(WeightDeviation::class, function (Faker $faker) {
    return [
        'weight1' => $faker->name,
    ];
});
