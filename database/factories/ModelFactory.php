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

$factory->define(App\Users::class, function (Faker\Generator $faker) {
	return [
	'name' => $faker->name,
	'username' => $faker->username,
	'email' => $faker->email,
	'password' => bcrypt('contraseña'),
	'remember_token' => str_random(10),
	];
});
