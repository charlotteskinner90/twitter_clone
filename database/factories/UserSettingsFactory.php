<?php

	use Faker\Generator as Faker;

	$factory->define(App\UserSettings::class, function (Faker $faker) {
		return [
			'user_id'    => $faker->uuid,
			'handle'     => $faker->userName,
			'password'   => bcrypt($faker->password),
			'created_at' => $faker->dateTime,
			'updated_at' => $faker->dateTime
		];
	});
