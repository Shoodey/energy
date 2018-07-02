<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\Game::class, function (Faker $faker) {
    return [
        'password' => rand(0, 1) ? bcrypt('password') : null,
        'is_visible' => rand(0, 1)
    ];
});
