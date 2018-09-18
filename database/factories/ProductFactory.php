<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'price' => $faker->numberBetween(25, 850),
        'description' => $faker->text(100),
        'image' => $faker->imageUrl(850, 640, 'food',true),
        //
    ];
});
