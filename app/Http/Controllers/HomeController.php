<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $models = Profile::all();
        $videos = Video:all();
        return view('home', compact('models','videos'));
    }
    public function profile(Profile $profile)
    {
        return view('profile', compact('profile'));
    }
    public function video(Video $video)
    {
        $video = Video::all();
        return view('video',compact('video'));
    }
}
