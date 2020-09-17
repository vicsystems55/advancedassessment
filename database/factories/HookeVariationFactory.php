<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HookeVariation;
use Faker\Generator as Faker;

$factory->define(HookeVariation::class, function (Faker $faker) {
    return [
        'weight1' => $faker->randomElement(['5', '10','15', '20', '25', '30', '45', '50', '55', '60', '65', '70', '75']),
        'weight2' => $faker->randomElement(['5', '10','15', '20', '25', '30', '45', '50', '55', '60', '65', '70', '75']),
        'weight3' => $faker->randomElement(['5', '10','15', '20', '25', '30', '45', '50', '55', '60', '65', '70', '75']),
        'weight4' => $faker->randomElement(['5', '10','15', '20', '25', '30', '45', '50', '55', '60', '65', '70', '75']),
        'weight5' => $faker->randomElement(['5', '10','15', '20', '25', '30', '45', '50', '55', '60', '65', '70', '75']),
        'weight6' => $faker->randomElement(['5', '10','15', '20', '25', '30', '45', '50', '55', '60', '65', '70', '75']),
    ];
});
