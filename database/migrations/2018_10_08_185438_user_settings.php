<?php

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class UserSettings extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('user_settings', function(Blueprint $table) {
				$table->uuid('user_id');
				$table->string('handle')->unique();
				$table->string('password');
				$table->dateTime('created_at');
				$table->dateTime('updated_at');
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists('user_settings');
		}
	}
