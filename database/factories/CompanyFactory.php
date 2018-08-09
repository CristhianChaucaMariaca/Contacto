<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name'	=> $faker->company,
        'web'	=> $faker->name,
        'file'	=> $faker->imageUrl($width=100,$height=100),
        'direction'	=> $faker->streetAddress,
    ];
});
