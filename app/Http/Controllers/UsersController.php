<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DateTime;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
	/**
	 * UsersController constructor.
	 */
	public function __construct() {

	}

	/**
	 * @param Request $request
	 * @return array
	 */
	// When the signup form is created later, date of birth will be a required field.
	// All users will eventually have an age associated.
	public function getUsers(Request $request) {
		$users = User::all();
		$usersWithAge = $this->generateAge($users);
		return $usersWithAge;
	}

	/**
	 * @param $users
	 * @return array
	 */
	// Works out age of user. Gets user date_of_birth, then takes the datetime of now and finds the diff
	private function generateAge($users) {
		$returnedUsers = [];
		foreach($users as $user) {
			(string) $datetime1 = new DateTime($user['date_of_birth']);
			(string) $datetime2 = new DateTime(now());
			$interval = $datetime1->diff($datetime2);
			$user['age'] = $interval->y;
			array_push($returnedUsers, $user);
		}
		return $returnedUsers;
	}

	/**
	 * @param $user_id
	 * @return \Illuminate\Support\Collection
	 */
	// Opens user_settings table, matches the user_id of the user with the user_id in the table
	// Returns the handle of that matched user
	public static function getHandleFromId($user_id) {
		return DB::table('user_settings')
			->where('user_id', '=', $user_id)
			->get(['handle']);
	}

	/**
	 * @param $handle
	 * @return \Illuminate\Support\Collection
	 */
	// Does the opposite to the above getHandleFromId function. Takes the handle and gets the user_id
	public static function getIdFromHandle($handle) {
		return DB::table('user_settings')
			->where('handle', '=', $handle)
			->get(['user_id']);
	}
}
