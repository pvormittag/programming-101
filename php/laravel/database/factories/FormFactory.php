<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Form;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Form::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'password' => Str::random(6),
        'server' =>Str::random(6),
        'database' =>Str::random(6),
        'verified_at' => now(),
    ];
});
