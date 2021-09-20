<?php

namespace Database\Factories;

/** @var Illuminate\Database\Eloquent\Factories\Factory; */

use Faker\Generator as Faker;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

$factory->define(App\Models\Photo::class, function (Faker $faker) {
    return [
        'id' => Str::random(12),
        'user_id' => fn() => factory(App\Models\User::class)->create()->id,
        'filename' => Str::random(12) . 'jpg',
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});