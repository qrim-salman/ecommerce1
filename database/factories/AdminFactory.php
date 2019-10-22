<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Admins;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Admins::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'is_super' => false,
        'remember_token' => Str::random(10),
    ];
});