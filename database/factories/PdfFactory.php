<?php

$factory->define(App\Pdf::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "information" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
