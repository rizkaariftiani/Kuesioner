<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kuesioner;
use Faker\Generator as Faker;

$factory->define(Kuesioner::class, function (Faker $faker) {
    return [
        'nim_mhs' => $faker->integer(),
        'nama_mhs' => $faker->sentence(),
        'kelas' => $faker->sentence(),
        'no_abs' => $faker->integer(),
        'jwb1' => $faker->integer(),
        'jwb2' => $faker->integer(),
        'jwb3' => $faker->integer(),
        'jwb4' => $faker->integer(),
        'jwb5' => $faker->integer()
    ];
});
