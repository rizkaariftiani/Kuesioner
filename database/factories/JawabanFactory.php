<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jawaban;
use Faker\Generator as Faker;

$factory->define(Jawaban::class, function (Faker $faker) {
    return [
        'nama_jwb' => $faker->sentence(),
        'value' => $faker->integer()
    ];
});
