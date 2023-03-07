<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'user_id' => $faker->id,
        'date_leave' => $faker->date(),
        'days' => $faker->number_format,
        'description' => $faker->text,
    ];
});
