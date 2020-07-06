<?php

use App\Citizen;
use Faker\Generator as Faker;

$factory->define(Citizen::class, function (Faker $faker) {
    return [
        // 'ci' => lexify('##########'),
        'nombres' => $faker->firstName().' '.$faker->firstName(),
        'apellidos' => $faker->lastName().' '.$faker->lastName(),
        'fecha_nac' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email' => $faker->email(),        
    ];
});
