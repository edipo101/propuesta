<?php

use App\Area;
use Faker\Generator as Faker;

$factory->define(Area::class, function (Faker $faker) {
	$title = $faker->sentence(4);
    return [
        'nombre' => $title,
        'slug' => str_slug($title),
    ];
});
