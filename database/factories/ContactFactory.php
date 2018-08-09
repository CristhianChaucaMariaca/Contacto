<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'people_id'	=>	rand(1,100),
        'type_id'	=>	rand(1,5),
        'phone'		=>	$faker->numberBetween(999999,9999999),
        'extension'	=>	$faker->numberBetween(100,999),
        'email'		=>	$faker->freeEmail(),
    ];
});
