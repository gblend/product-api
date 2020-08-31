<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => \App\Category::inRandomOrder()->first()->id,
        'name' => $faker->word(),
        'description' => $faker->paragraph(5),
        'price' => mt_rand(1000, 100000),
    ];
});
