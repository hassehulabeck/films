<?php

use Faker\Generator as Faker;

$factory->define(App\Award::class, function (Faker $faker) {
    return [
      'name' => $faker->word,
      'year' => $faker->year
    ];
});
