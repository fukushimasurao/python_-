<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class LoginController extends Controller
{
    public function twitter()
    {

        $twitter = new TwitterOAuth($twitter_api_key, $twitter_api_secret_key, $twitter_access_token, $twitter_access_token_secret);
        $twitter->post("statuses/update", array("status" => "TEST Tweet."));
    }
}
