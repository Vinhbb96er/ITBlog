<?php

use Faker\Generator as Faker;

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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'remember_token' => str_random(10),
        'role' => $faker->numberBetween(1, 3),
    ];
});

$factory->define(App\Models\UserDetail::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::all()->random()->id,
        'full_name' => $faker->name,
        'rate' => $faker->randomFloat(null, 0, 100),
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => implode($faker->words(2), ' '),
        'parent_id' => 1,
    ];
});

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::all()->random()->id,
        'category_id' => \App\Models\Category::all()->random()->id,
        'title' => $faker->sentence(),
        'preview' => $faker->sentence(2),
        'content' => $faker->paragraph(2),
        'total_view' => $faker->randomDigit(),
        'total_like'=> $faker->randomDigit(),
        'image' => 'images/m2.jpg',
    ];
});

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::all()->random()->id,
        'post_id' => \App\Models\Post::all()->random()->id,
        'content' => $faker->sentence(),
    ];
});
