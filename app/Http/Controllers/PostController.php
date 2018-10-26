<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Auth;
use App\Http\Requests\PostRequest;
use Exception;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $categories = Category::pluck('name', 'id');

        return view('home.post-blog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        try {
             $data = $request->only(
                'title',
                'preview',
                'content',
                'category_id'
            );

            $data['total_view'] = 0;
            $data['total_like'] = 0;
            $data['image'] = 'https://images-na.ssl-images-amazon.com/images/I/51k%2BOz9fUKL._SY355_.jpg';

            Auth::user()->posts()->create($data);

            return redirect()->back()->with('success', 'Post success!');
        } catch(Exception $e) {
            return redirect()->back()->with('error', 'Post fail!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $post = Post::find($id);
            $relarePosts = Post::where('category_id', $post->category->id)->where('id', '<>', $id)->limit(5)->get();
            $comments = $post->comments()->orderBy('created_at', 'desc')->get();

            return view('home.detail-post', compact('post', 'relarePosts', 'comments'));
        } catch(Exception $e) {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * createComment
     *   
     * @param $request, $id
     * @return Create comment
     */
    public function createComment(Request $request, $id) 
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        try {
            $data = [
                'content' => $request->content,
                'user_id' => Auth::user()->id,
                'post_id' => $id,
            ];

            Comment::create($data);

            return redirect()->back()->with('success', 'Post success!');
        } catch(Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Post fail!');
        }
    }
}
