<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweets extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'body',
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
