<?php

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        "student_id" => $faker->randomNumber(2),
        "first_name" => $faker->name,
        "last_name" => $faker->name,
        "age" => $faker->randomNumber(2),
        "email" => $faker->safeEmail,
    ];
});
