<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DateTime;

class UsersController extends Controller
{

	private $first_name;
	private $last_name;
	private $email;
	private $date_of_birth;
	private $password;
	private $handle;

	/**
	 * UsersController constructor.
	 */
	public function __construct() {
		$this->first_name;
		$this->last_name;
		$this->email;
		$this->date_of_birth;
		$this->password;
		$this->handle;
	}

	/**
	 * @param Request $request
	 */
	public function createAccount(Request $request) {
			(string) $this->first_name     = $request->get('first_name');
			(string) $this->last_name      = $request->get('last_name');
			(string) $this->email          = $request->get('email');
			(string) $this->date_of_birth  = $request->get('date_of_birth');
			(string) $this->password       = $request->get('password');
			(string) $repeated_password    = $request->get('repeated_password');
			(string) $this->handle         = $request->get('handle');
			$this->verifyHandle();
			$this->verifyPassword();
	}

	/**
	 * @param Request $request
	 * @return array
	 */
	public function getUsers(Request $request) {
		$users = User::all();
		$usersWithAge = $this->generateAge($users);
		return $usersWithAge;
	}

	private function generateAge($users) {
		$returnedUsers = [];
		foreach($users as $user) {
			$datetime1 = new DateTime($user['date_of_birth']);
			$datetime2 = new DateTime(now());
			$interval = $datetime1->diff($datetime2);
			$user['age'] = $interval->y;
			array_push($returnedUsers, $user);
		}
		return $returnedUsers;
	}

	private function verifyHandle() {

	}

	private function verifyPassword() {

	}
}
