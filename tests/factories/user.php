<?php

$factory('App\User', [
	'firstName' => $faker->firstName,
	'lastName' => $faker->lastName,
	'email' => $faker->unique()->email,
	'password' => 'password123',
]);