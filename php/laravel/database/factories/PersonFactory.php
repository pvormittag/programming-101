<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Models\Person::class, function (Faker $faker) {
    $hasGender = $faker->boolean(50);
    $isFemale = $faker->boolean(80);

    $gender = null;
    if ($hasGender) {
        $gender = $isFemale ? 'female' : 'male';
    }

    return [
        'name' => $faker->name(),
        'email' => $faker->email(),
        'gender' => $gender,
    ];
});
