<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
  $title = $faker->word;
  return [
    'title' => $title,
    'description' => $faker->text(1000),
    'imagepath' => $title . ".png",
    'price' => $faker->numberBetween(100, 10000),
    'category_id' => $faker->numberBetween(4, 12)
  ];
});
