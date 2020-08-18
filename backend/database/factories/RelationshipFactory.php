<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Relationship;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Relationship::class, function (Faker $faker) {
    return [
        'from_user_id' => (User::all()->random()->first())->id,
        'to_user_id'   => (User::all()->random()->first())->id,
        'status'       => 0,
    ];
});
