<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Admin;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name'=>$faker->unique()->name,
        'password'=>Hash::make($faker->name)
    ];
});
