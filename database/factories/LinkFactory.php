<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Link;
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

$factory->define(Link::class, function (Faker $faker) {
    return [
        'url' => 'http://' . $faker->freeEmailDomain,
        'code' => substr(md5(uniqid(rand(), true)), 0, 6),
        'hits' => $faker->randomDigit,
    ];
});
