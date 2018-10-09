<?php

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class VerifyEmails extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('verify_emails', function(Blueprint $table) {
				$table->increments('id');
				$table->string('auth_token');
				$table->uuid('user_id')->unique();
				$table->dateTime('created_at');
				$table->dateTime('valid_until');
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
			Schema::dropIfExists('verify_emails');
		}
	}
