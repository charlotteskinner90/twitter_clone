<?php

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class Tweets extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('tweets', function(Blueprint $table) {
				$table->increments('tweet_id')->unique();
				$table->uuid('user_id');
				$table->string('body', 265);
				$table->json('liked_by')->nullable();
				$table->json('retweeted_by')->nullable();
				$table->bigInteger('like_count');
				$table->bigInteger('retweet_count');
				$table->dateTime('updated_at');
				$table->dateTime('created_at');
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists('tweets');
		}
	}
