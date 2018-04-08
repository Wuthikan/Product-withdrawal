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

$factory->define(DurianSoftware\Models\CompanyGroup::class, function (Faker $faker) {

    $customer_tier_id = [null];

    for ($i = 1; $i <= 3; $i++) {
        $customer_tier_id[] = $i;
    }
    $customer_tier_id[] = null;
    return [
        'name' => $faker->jobTitle,
        'description' => $faker->text(255),
        'status' => $faker->randomElement(['on', 'off']),
        'customer_tier_id' => null,
        // 'customer_tier_id' => array_rand($customer_tier_id),
    ];
});
