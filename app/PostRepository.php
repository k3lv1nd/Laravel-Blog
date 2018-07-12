<?php

namespace App;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostRepository
{
    private $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
//        dd(Auth::user());
        //$posts = User::find(Auth::user()->id)->posts;
        $posts = Post::with('user')->get();
        return $posts;

    }

    public function getHomeitems()
    {
        $posts = Post::with('user')->get();
        return $posts;
    }

    public function getForm()
    {
        return view('post/post_form');
    }

    public function create()
    {
        $post = Post::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'author' => Auth::user()->id
        ));
        return $post;
    }

    public function getPost($id)
    {
        $post = post::find($id);
        return $post;

    }

    public function edit($id)
    {
        $post = post::find($id);
        return $post;
    }
} 
 