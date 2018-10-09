<?php

use Faker\Generator as Faker;
use App\Tweets;

$factory->define(Tweets::class, function (Faker $faker) {
    return [
        'tweet_id'      => $faker->unique()->randomNumber(),
				'user_id'       => $faker->uuid(),
				'body'          => $faker->realText(265),
				'liked_by'      => null,
				'retweeted_by'  => null,
				'like_count'    => $faker->numberBetween(0, 9000),
    		'retweet_count' => $faker->numberBetween(0, 9000),
				'updated_at'    => now(),
				'created_at'    => $faker->dateTime()
		];
});
