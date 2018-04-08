<?php

use Faker\Generator as Faker;
use Faker\Provider\DateTime;
use Faker\Provider\Image;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Hash;

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

$factory->define(DurianSoftware\Date::class, function (Faker $faker) {
    $timestamp = $faker->unixTime($max = 'now');

    return [
        'client_id'     => 1,
        'date'          => date('j', $timestamp),
        'day'           => date('D', $timestamp),
        'day_of_week'   => date('w', $timestamp)+1,
        'month'         => date('n', $timestamp),
        'month_name'    => date('F', $timestamp),
        'quarter'       => ceil(date('n', $timestamp)/3),
        'quarter_name'  => ceil(date('n', $timestamp)/3),
        'year'          => date('Y', $timestamp),
    ];
});

$factory->define(DurianSoftware\User::class, function (Faker $faker) {
    return [
        'client_id'             => 1,
        'birth_date_id'         => factory(DurianSoftware\Date::class)->create()->id,
        'register_date_id'      => factory(DurianSoftware\Date::class)->create()->id,
        'member_number'         => $faker->unique()->buildingNumber,
        'password'              => Hash::make($faker->password),
        'first_name'            => $faker->firstName,
        'last_name'             => $faker->lastName,
        'nick_name'             => $faker->firstName,
        'gender'                => $faker->randomElement(['male', 'female']),
        'email'                 => $faker->unique()->email,
        'phone'                 => $faker->tollFreePhoneNumber,
        'image1'                => $faker->imageUrl($width = 640, $height = 480),
        'image2'                => $faker->imageUrl($width = 640, $height = 480),
        'image_show'            => $faker->randomElement(['default', 'image1', 'image2']),
        'description_status'    => $faker->text($maxNbChars = 200),
        'is_block'              => $faker->randomElement(['block', 'unblock']),
        'user_right'            => $faker->randomElement(['admin', 'staff']),
    ];
});

$factory->define(DurianSoftware\DepartmentRoleUser::class, function (Faker $faker) {
    return [
        'client_id'     => 1,
        'user_id'       => factory(DurianSoftware\User::class)->create()->id,
        'department_id' => rand(1, 7),
        'role_id'       => rand(1, 4),
    ];
});
