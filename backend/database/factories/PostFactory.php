<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => (User::all()->random()->first())->id,
        'content' => $faker->realText(100),
        'slug' => $faker->url,
    ];
});
