<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Crud;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Crud::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'pay_draw' => $faker->randomElement(['Both','PAYE','Drawing/Shareholder']),
        'three_years_in_business' => $faker->randomElement(['0','1']),
        'years' => $faker->randomDigit,
        'fulltime' => $faker->randomElement(['0','1']),
        'staff_count' => $faker->randomDigit,
        'on_tool' => $faker->randomElement(['0','1']),
        'share_dir_on_tool' => $faker->randomElement(['0','1']),
        'take_out_money' => $faker->randomDigit,
        'pay_freq' => $faker->randomElement(['Daily','Monthly','Annually']),
        'acc_cover' => $faker->randomElement(['a','b','c','d']),
        'cover_plus_extra_amt' => $faker->randomNumber


    ];
});
