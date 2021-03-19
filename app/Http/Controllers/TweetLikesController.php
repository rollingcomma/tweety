<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetLikesController extends Controller
{
    public function store(Tweet $tweet)
    {
        $tweet->toggleLike(current_user());
        return back();
    }

    public function destory(Tweet $tweet)
    {
        $tweet->toggleDislike(current_user());
        return back();
    }
}
