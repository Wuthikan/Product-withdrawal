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

$factory->define(DurianSoftware\Models\NewsAndEvent::class, function (Faker $faker) {


    return [
        'user_id' => 1,
        'title' => $faker->sentence(),
        'description' => $faker->text(),
        'image' => $faker->md5 .'.jpg',
        'news_events_date' => $faker->dateTime()->format('Y-m-d H:i:s'),
        'start_date' => $faker->dateTime()->format('Y-m-d H:i:s'),
        'end_date' => $faker->dateTime()->format('Y-m-d H:i:s'),
        'status' => $faker->randomElement(['on', 'off'])
    ];
});
