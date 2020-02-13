<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enterprise;
use Faker\Generator as Faker;

$factory->define(Enterprise::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'slug' => $faker->slug,
        'about' => $faker->text,
        'approved' => true,
        'country' => $faker->countryCode
    ];
});
