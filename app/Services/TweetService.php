<?php

namespace App\Services;

use App\Models\Tweet;

class TweetService
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getTweets()
    {
        //       
        return Tweet::orderBy('created_at', 'DESC')->get();
    }
}
