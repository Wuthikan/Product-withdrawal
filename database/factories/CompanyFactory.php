<?php
use Faker\Generator as Faker;

$factory->define(DurianSoftware\Models\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'company_group_id' => rand(0, 50),
    ];
});
