<?php

use Faker\Generator as Faker;

$factory->define(App\Type::class, function (Faker $faker) {
    return [
        'description'	=> $faker->sentence(2),
    ];
});
