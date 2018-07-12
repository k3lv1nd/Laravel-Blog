<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->description,
        'author' => $faker->author, // secret
        'remember_token' => str_random(10),
        //
    ];
});
