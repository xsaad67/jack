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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('secret'), 
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Thread::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 100),
        'user_id' => rand(1,25),
        'category_id' => rand(1,25),
        'replies_count' => rand(2,34),
        'visits' => rand(300,400),
        'body' => $faker->realText($maxNbChars = rand(800,1200)),
    ];
});

$factory->define(App\Comment::class,function(Faker $faker){
    return [
        'user_id' => rand(1,30),
        'body' => $faker->realText($maxNbChars = 100),
        'parent_id'=>10,
        'commentable_id' => rand(1,20),
        'commentable_type'=> 'App\Thread',

    ];
});

$factory->define(App\Reply::class,function(Faker $faker){
    return[
        'client_id'=>rand(1,16),
        'member_id'=>rand(1,6),
        'order_status'=>1,
        'shipping_date' =>$faker->date,
        'courier_name' =>$faker->company,
        'shipping_reference'=>rand(2,12),
    ];
});




