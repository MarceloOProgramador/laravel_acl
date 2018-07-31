<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Gate;

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
    public function index(Post $Post)
    {
        $posts = $Post->all();
        return view('home', compact("posts"));
    }

    public function update($id, Post $Post){
        $post = $Post->find($id);
        if (Gate::forUser(Auth()->user())->denies('update-post', $post)) {
           abort(403, "unauthorized");
        }else{
            return view("update", compact("post"));
        }
    }
}
