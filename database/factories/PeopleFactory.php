<?php

use Faker\Generator as Faker;

$factory->define(App\People::class, function (Faker $faker) {
    return [
        'user_id'		=>	rand(1,10),
        'company_id'	=>	rand(1,20),
        'name'			=>	$faker->firstName,
        'last_name'		=>	$faker->lastName,
        'file'			=>	$faker->imageUrl($width=100, $height=100),
        'cargo'		=>	$faker->sentence(3),
    ];
});
