<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
      'name' => $faker->catchPhrase,
      'year' => $faker->year,
      'image' => $faker->url
    ];
});
