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

$factory->define(DurianSoftware\Models\Product::class, function (Faker $faker) {
    return [
        'client_id' => $faker->randomDigitNotNull,
        'publisher_id' => $faker->numberBetween(1, 50),
        'image' => $faker->md5() . '.jpg',
        'product_code' => $faker->md5(),
        'name' => $faker->word,
        'description' => $faker->text(200),
        'release_date' => $faker->date(),
        'initial_purchase_date' => $faker->date(),
        'cost' => $faker->numberBetween(50, 200),
        'is_stock_control' => $faker->numberBetween(0, 1),
        'is_serial_control' => $faker->numberBetween(0, 1),
        'sales_tax' => $faker->numberBetween(0, 1),
        'weight' => $faker->randomFloat(2, 10, 300),
        'width' => $faker->randomFloat(2, 10, 300),
        'height' => $faker->randomFloat(2, 10, 300),
        'depth' => $faker->randomFloat(2, 10, 300),
        'genre' => $faker->text(200),
        'number_of_player' => $faker->numberBetween(1, 5),
        'minimum_stock' => $faker->numberBetween(10, 50),
        'rating' => $faker->text(80),
        'import_duty' => $faker->randomFloat(2, 10, 300),
        'aging_alert' => $faker->numberBetween(10, 50),
        'warranty' => $faker->randomElement([
            '7 DAYS',
            '30DAYS',
            '3 MONTHS',
            '6MONTHS',
            '12MONTHS',
            '16MONTHS',
            '24MONTHS',
            '36MONTHS'
        ]),
        'pre_order_gifts' => $faker->text(200),
        'other' => $faker->text(200)
    ];
});
