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
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Post::class, function ($faker) {
    return [
         //we send the user_id to post_id
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'title' => $faker->sentence,
        'body'  => $faker->paragraph
    ];
});

//php artisan thinker
//$post = factory('App\Post',50)->create()
//$post->each(function($post){ factory('App\Reply',10)->create(['post_id' => $post->id]); });

$factory->define(App\Reply::class, function ($faker) {
    return [
        'post_id' => function () {
            return factory('App\Post')->create()->id;
        },
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'body'  => $faker->paragraph
    ];
});
