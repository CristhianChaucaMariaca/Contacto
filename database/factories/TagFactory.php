<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $tag=$faker->unique()->word(5);
    return [
        'name'	=>	$tag,
        'slug'	=>	str_slug($tag),
    ];
});
