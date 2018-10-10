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
				$table->string('liked_by')->nullable();
				$table->string('retweeted_by')->nullable();
				$table->bigInteger('like_count')->default(0);
				$table->bigInteger('retweet_count')->default(0);
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
