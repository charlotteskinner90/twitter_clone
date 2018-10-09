<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
	protected $fillable = [
		'handle', 'password',
	];

	protected $hidden = [
		'password', 'user_id'
	];
}
