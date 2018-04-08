<?php

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

$factory->define(DurianSoftware\Models\CustomerTier::class, function (Faker $faker) {
    return [
        'client_id' => 1,
        'name' => $faker->name,
        'description' => $faker->text,
        'image' => $faker->md5 .'.jpg'
    ];
});
