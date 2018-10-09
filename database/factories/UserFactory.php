<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
	return [
			'user_id'       => $faker->unique()->uuid(),
			'first_name'    => $faker->firstName(),
			'last_name'     => $faker->lastName(),
			'email'         => $faker->safeEmail(),
			'date_of_birth' => $faker->dateTimeThisDecade(),
			'created_at'    => $faker->dateTimeBetween('-5 years'),
			'updated_at'    => now(),
			'last_login'    => now(),
			'is_verified'   => $faker->boolean()
    ];
});
