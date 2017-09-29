<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Conference::class, function ($faker) {
    return [
        'name' => $faker->name,
        'type' => $faker->randomElements(['public','private'], $count = 1),
        'description' => $faker->sentence($nbWords=10),
        'address1' => $faker->address,
        'address2' => $faker->secondaryAddress,
        'city' => $faker->city,
        'country' => $faker->country,
        'start_time' => $faker->time,
        'end_time' => $faker->time,
    ];
});