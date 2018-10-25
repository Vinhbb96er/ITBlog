<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newestCategories = Category::orderBy('created_at', 'desc')->with([
            'posts'])->take(3)->get();

        $postsTopLike = Post::orderBy('total_like', 'desc')->take(3)->get();
        $postsTopView = Post::orderBy('total_view', 'desc')->take(5)->get();
        $posts = Post::paginate(5);

        return view('home.home', compact([
            'newestCategories', 
            'postsTopLike', 
            'postsTopView', 
            'posts',
        ]));
    }
}
