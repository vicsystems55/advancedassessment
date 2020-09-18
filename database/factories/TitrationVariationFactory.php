<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TitrationVariation;
use Faker\Generator as Faker;

$factory->define(TitrationVariation::class, function (Faker $faker) {
    return [
        'acid' => $faker->randomElement(['5', '10','15', '20', '25', '30', '45', '50', '55', '60', '65', '70', '75']),
        'base' => $faker->randomElement(['5', '10','15', '20', '25', '30', '45', '50', '55', '60', '65', '70', '75']),
        'indicator' => $faker->randomElement(['5', '10','15', '20', '25', '30', '45', '50', '55', '60', '65', '70', '75']),
    ];
});
