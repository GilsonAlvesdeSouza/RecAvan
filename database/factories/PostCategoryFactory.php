<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\Models\PostCategory::class, function (Faker $faker) {
    return [
        'post' => $faker->randomElement(\LaraDev\Models\Post::all()->pluck('id')->toArray()),
        'category' => $faker->randomElement(\LaraDev\Models\Category::all()->pluck('id')->toArray())
    ];
});
