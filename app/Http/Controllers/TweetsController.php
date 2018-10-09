<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweets;
use Illuminate\Support\Facades\DB;

class TweetsController extends Controller
{
    public function getUserTweets($handle) {

			(array) $userTweets = [];

			(array) $user_id = DB::table('user_settings')
				->where('handle', '=', $handle)
				->get(['user_id']);

			(array) $tweetsByUser =  DB::table('tweets')
				->where('user_id', '=', $user_id[0]->user_id)
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
				array_push($userTweets, $tweets);
			}

    	return $userTweets;
		}

		public function getTweets() {
			return Tweets::all();
		}
}
