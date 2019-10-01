<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mother_name' => $faker->name,
        'father_name' => $faker->name,
        'father_job' => $faker->name,
        'job' => $faker->name,
        'mother_job' => $faker->name,
        'father_education' => 'لیسانس',
        'wife_education' => 'لیسانس',
        'child_number' => rand('1','15'),
        'home_number' => rand('1200000000','999999999'),
        'phone_number' => rand('1200000000','999999999'),
        'work_number' => rand('1200000000','999999999'),
        'home_address' => $faker->streetAddress,
        'job_address' => $faker->streetAddress,
        'sick' => $faker->streetAddress,
        'father_death' => 1,
        'mother_death' => 1,
        'single' => 1,
        'admin_id' => rand(2,4),
        'mother_education' => 'لیسانس',
        'education' => 'لیسانس',
        'state' => $faker->streetName,
        'sanguis' => '5' ,
        'birthday' => $faker->date(),
        'height' => $faker->name,
        'image' => 'storage/3WZqL45Aac1PobhNb5zNe813v1gMPaTPOTcjgryL.jpeg',
        'nation_image' => 'storage/3WZqL45Aac1PobhNb5zNe813v1gMPaTPOTcjgryL.jpeg',
        'ninja_image' => 'storage/3WZqL45Aac1PobhNb5zNe813v1gMPaTPOTcjgryL.jpeg',
        'status' => 0,
        'ninja_code' =>rand('1200000000','999999999'),
        'birth_certificate' =>rand('1200000000','999999999'),
        'nation_certificate' =>rand('1200000000','999999999'),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    ];
});
