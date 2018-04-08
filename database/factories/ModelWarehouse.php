<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(DurianSoftware\Models\Warehouse::class, function (Faker\Generator $faker) {

    return [
        'client_id' => '1',
        'name' => $faker->name,
        'description' => $faker->text,
        'image' => '',
        'warehourse_type' => $faker->randomElement(['Public','Private']),
    ];
});
