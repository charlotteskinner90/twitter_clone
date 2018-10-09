<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
    public function run()
		{
			factory(App\User::class, 10)
				->create()
				->each(function($user) {
					factory(App\Tweets::class, random_int(0, 50))->create([
						'user_id' => $user->user_id
					]);
					factory(App\UserSettings::class)->create([
						'user_id'    => $user->user_id,
						'created_at' => $user->created_at,
						'updated_at' => $user->updated_at
					]);
				});

		}
}
