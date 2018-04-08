<?php

use Faker\Generator as Faker;

$factory->define(DurianSoftware\Models\BackOffice\Setting\Country::class, function (Faker $faker) {

    $country = $faker->country;

    return [
        'name' => $country,
        'description' => str_random(10),
        'code' => $faker->postcode
    ];
});
