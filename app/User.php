<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name', 'last_name', 'email', 'date_of_birth'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'user_id',
	];
}
