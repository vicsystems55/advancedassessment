<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Practical;
use Faker\Generator as Faker;

$factory->define(Practical::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->numberBetween($min = , $max = 50),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
