<?php

use App\User;
use App\Photo;
use App\Gallery;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Gallery::class, function (Faker\Generator $faker) {
    return [
        'year' => date('Y'),
    ];
});

$factory->define(Photo::class, function (Faker\Generator $faker) {
    $name = $faker->word;

    return [
        'gallery_id' => function() {
            return factory(Gallery::class)->create()->id;
        },
        'name' => "{$name}.jpg",
        'path' => "path/{$name}.jpg",
        'thumbnail_path' => "path/tn_{$name}.jpg",
    ];
});

