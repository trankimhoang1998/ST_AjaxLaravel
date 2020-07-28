<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nhanvien;
use Faker\Generator as Faker;

$factory->define(Nhanvien::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'phone'=>$faker->phoneNumber,
        'email' => $faker->unique()->email,
        'address'=>$faker->name,
    ];
});
