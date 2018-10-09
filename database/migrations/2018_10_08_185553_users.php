<?php

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class Users extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('users', function(Blueprint $table) {
				$table->uuid('user_id')->primary();
				$table->string('first_name');
				$table->string('last_name');
				$table->string('email')->unique();
				$table->date('date_of_birth');
				$table->dateTime('last_login')->nullable();
				$table->dateTime('created_at');
				$table->dateTime('updated_at');
				$table->boolean('is_verified');
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists('users');
		}
	}
