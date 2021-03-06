<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $articles = Article::where('user_id', '=', $user->id)
            ->get();
        //dump($user);
        //dump($articles->count());


        return view('home', ['articles'=>$articles]);
    }
}
