<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Post;
use Illuminate\Support\Str;
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

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 20),
        'category_id' => $faker->numberBetween(1, 10),
        'title' => $faker->text(10),
        'views' => $faker->numberBetween(0,0),
        'slug' => $faker->slug(2),
        'preview_img' => $faker->numberBetween(1, 20).'.jpg',
        'preview_cover' => $faker->numberBetween(1, 20).'.jpg',
        'description' => $faker->text(50),
        'body' => $faker->text(200),



    ];
});

