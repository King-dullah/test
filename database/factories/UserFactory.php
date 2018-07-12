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
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Role::class, function (Faker $faker) {
    return [

    ];
});
$factory->state(App\Role::class,'Python Developer', function (Faker $faker) {

    return[
        'name'=>$faker->name,
        'manager_id'=> $faker->numberBetween(1111,10110),
        'salary' =>$faker->numberBetween(10000,20000),
        'resumed' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'job_title' => 'Python Developer',
    ];


});

$factory->state(App\Role::class,'PHP Developer', function (Faker $faker) {

    return[
        'name'=>$faker->name,
        'manager_id'=> $faker->numberBetween(1111,10110),
        'salary' =>$faker->numberBetween(10000,20000),
        'resumed' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'job_title' => 'PHP Developer',
    ];


});

$factory->state(App\Role::class,'JS Developer', function (Faker $faker) {

    return[
        'name'=>$faker->name,
        'manager_id'=> $faker->numberBetween(1111,10110),
        'salary' =>$faker->numberBetween(10000,20000),
        'resumed' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'job_title' => 'JS Developer',
    ];


});
$factory->state(App\Role::class,'Senior Developer', function (Faker $faker) {
    return[
        'name'=>$faker->name,
        'manager_id'=> $faker->numberBetween(111,1110),
        'salary' =>$faker->numberBetween(20000, 50000),
        'resumed' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'job_title' => 'Senior Developer',
    ];


});
$factory->state(App\Role::class,'Team Leader', function(Faker $faker){
   return [
        'name'=>$faker->name,
        'manager_id'=>$faker->numberBetween(11,110),
        'salary' =>$faker->numberBetween(50000,100000),
        'resumed' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'job_title' => 'Team Leader',
    ];


});
$factory->state(App\Role::class,'Project Manager', function(Faker $faker){
   return [
        'name'=>$faker->name,
        'manager_id'=> $faker->numberBetween(1,10),
        'salary' =>$faker->numberBetween(100000,200000),
        'resumed' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'job_title' => 'Project Manager',
    ];


});
$factory->state(App\Role::class,'Program Manager', function(Faker $faker){
   return [
        'name'=>$faker->name,
        'manager_id'=> 0,
        'salary' =>$faker->numberBetween(200000,500000),
        'resumed' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'job_title' => 'Program Manager',
    ];


});
