<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Profile;

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
        return view('home', compact('models'));
    }
    public function profile()
    {
        return view('profile');
    }
    public function video()
    {
        return view('video');
    }
}
