<?php
use Faker\Generator as Faker;

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

$factory->define(App\Models\Presentation::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'start_time' => $faker->time,
        'end_time' => $faker->time,
        'abstract' => $faker->sentence($nbWords=30),
        'keywords' => $faker->sentence($nbWords=10),
                
    ];
});