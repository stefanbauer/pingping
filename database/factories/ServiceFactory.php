<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'identifier' => str_random(8),
        'alias' => $faker->word,
        'url' => $faker->url,
    ];
});
