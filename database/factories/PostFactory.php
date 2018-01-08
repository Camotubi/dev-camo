<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker, $userId = NULL) {
    return [
        'title' => $faker->sentence,
        'body' => '<h1>'.$faker->sentence.'</h1><p>'.$faker->paragraph.'</p>',
        'user_id' => $user_id,
        //
    ];
});

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
