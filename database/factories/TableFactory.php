<?php

use Faker\Generator as Faker;

$factory->define(App\Table::class, function (Faker $faker) {
    return [
        'code' => $faker->text(8),
        'name' => $faker->text(64),
        'photo' => $faker->text(64)
    ];
});
