<?php

$factory->define(App\Teacher::class, function (Faker\Generator $faker) {
    return [
        "reg_number" => $faker->randomNumber(2),
        "first_name" => $faker->name,
        "last_name" => $faker->name,
        "email" => $faker->safeEmail,
        "qulification" => $faker->name,
    ];
});
