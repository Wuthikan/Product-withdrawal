<?php

use Faker\Generator as Faker;

$factory->define(DurianSoftware\Models\General::class, function (Faker $faker) {
    return [
        'company_name' => 'demo copany',
        'address' => $faker->address,
        'postcode' => '000001',
        'district' => 'd00001',
        'tax_no' => 123456789,
        'logo' => '\images\back-office\setting\general\sample-image.jpg',
        'background' => '\images\back-office\setting\general\sample-image.jpg',
        'initial' => 'Ngin',
        'alert_prepo' => $faker->numberBetween($min = 1, $max = 3),
        'alert_initialpo' => $faker->numberBetween($min = 1, $max = 3),
        'alert_postpo' => $faker->numberBetween($min = 1, $max = 3),
        'first_alert' => $faker->numberBetween($min = 1, $max = 3),
        'second_alert' => $faker->numberBetween($min = 1, $max = 3),
        'third_alert' => $faker->numberBetween($min = 1, $max = 3),
        'forth_alert' => $faker->numberBetween($min = 1, $max = 3),
        'username' => $faker->username,
        'password' => '1111111111',
        'server' => '192.0.0.1',
        'port' => '8080',
        'type' => 'SSL',
        'facebook' => 'facebook',
        'twitter' => 'twitter',
        'line' => 'line',
        'tel' => '0899999999',
        'google_analytic' => $faker->address
    ];
});
