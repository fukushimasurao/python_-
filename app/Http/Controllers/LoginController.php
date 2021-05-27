<?php

namespace App\Http\Controllers;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function twitter()
    {
        $twitter_api_key = getenv('TWITTER_API_KEY');
        $twitter_api_secret_key = getenv('TWITTER_API_SECRET_KEY');
        $twitter_access_token = getenv('TWITTER_ACCESS_TOKEN');
        $twitter_access_token_secret = getenv('TWITTER_ACCESS_SECRET');

        $twitter = new TwitterOAuth($twitter_api_key, $twitter_api_secret_key, $twitter_access_token, $twitter_access_token_secret);
        $twitter->post("statuses/update", ["status" => "TEST Tweet."]);
    }
}
