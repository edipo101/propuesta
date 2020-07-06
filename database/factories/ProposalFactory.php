<?php

use App\Proposal;
use Faker\Generator as Faker;

$factory->define(Proposal::class, function (Faker $faker) {
	$title = $faker->sentence(4);
    return [
    	'area_id' => rand(1, 30),
        'citizen_id' => rand(1, 30),
        'user_id' => rand(1, 30),
        'titulo' => $title,
        'slug' => str_slug($title),
        'descripcion' => $faker->text(500),
        'propuesta' => $faker->text(500),
        'acciones' => $faker->text(500),
        'involucrados' => $faker->text(500),
        'presupuesto' => $faker->text(500),
        'estado' => $faker->randomElement(['RECHAZADO', 'ACEPTADO', 'EN ANALISIS']),
        'votos' => rand(1, 50),
    ];
});
