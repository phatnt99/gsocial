<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => (Post::all()->random()->first())->id,
        'user_id' => (User::all()->random()->first())->id,
        'content' => $faker->realText(50),
    ];
});
