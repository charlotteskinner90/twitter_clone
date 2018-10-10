<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Support\Facades\DB;

class TweetsController extends Controller
{
	/**
	 * Returns tweets user specific
	 * @param $handle
	 * @return array
	 */
	public function getUserTweets($handle) {

			(array) $userTweets = [];
			// Returns tweets by a specific user from the URL handle parameter
			// Tweets table: Get the handle from the URL, pass this through the getIdFromHandle function to get the user_id
			// Get the parameters associated with that user. Order by the updated date desc
			(array) $tweetsByUser = DB::table('tweets')
				->where('user_id', '=', UsersController::getIdFromHandle($handle)[0]->user_id)
				->orderBy('updated_at', 'desc')
				->get([
						'tweet_id',
						'body',
						'liked_by',
						'retweeted_by',
						'like_count',
						'retweet_count',
						'updated_at'
				]);

			foreach($tweetsByUser as $tweets) {
				(object) $tweets->handle = $handle;
				(string) $tweets->age = $this->tweetAge($tweets->updated_at);
				array_push($userTweets, $tweets);
			}

    	return $userTweets;
		}

	/**
	 * Returns tweets non-user specific
	 * @param int $limit
	 * @return array
	 */

	// Returns all the tweets by all users, similar to above but without specificity on user
	public function getTweets($limit = 100) {
		(array) $allTweets = [];
		(array) $tweets = DB::table('tweets')
			->limit($limit)
			->orderBy('updated_at', 'desc')
			->get([
				'user_id',
				'tweet_id',
				'body',
				'liked_by',
				'retweeted_by',
				'like_count',
				'retweet_count',
				'updated_at'
			]);

		foreach($tweets as $tweet) {
			// Not ideal for a real life twitter app - in this case we only have a 200 or so tweets so database performance wouldnt be affected
			// In a real scenario of millions of tweets, not optimal to get all of the tweets and call the database this often
			(string) $tweet->handle = UsersController::getHandleFromId($tweet->user_id)[0]->handle;
			(string) $tweet->age = $this->tweetAge($tweet->updated_at);
			array_push($allTweets, $tweet);
		}
		return $allTweets;
	}

	// Gets the age of the tweet. Takes the datetime the tweet was last updated, converts to a string
	// Find the diff between updated_date and the datetime now.
	// Converts to day, month, year
	// If less than a day and month = hours
	// If less than a month and year = days
	// If less than a year =  months - else, a year
	private function tweetAge($updated_at) {
		(object) $datetime1 = new DateTime($updated_at);
		(object) $datetime2 = new DateTime(now());
		if($datetime1->diff($datetime2)->d < 1 && $datetime1->diff($datetime2)->m < 1) {
			return $datetime1->diff($datetime2)->h." hours";
		} elseif($datetime1->diff($datetime2)->m < 1 && $datetime1->diff($datetime2)->y < 1) {
			return $datetime1->diff($datetime2)->d." days";
		} elseif($datetime1->diff($datetime2)->y < 1) {
			return $datetime1->diff($datetime2)->m." months";
		} else {
			return $datetime1->diff($datetime2)->y." years";
		}
	}
}
