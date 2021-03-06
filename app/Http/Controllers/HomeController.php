<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use Validator;

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
//
//     public function index()
//    {
//        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')
//            ->paginate(10);
//        return view('home', ['posts' => $posts]);
//    }

//    public function getPostForm() {
//        return view('post/post_form');
//    }

//    public function createPost(Request $request){
//        // return $request->all();
//
//        $inputs=$request->all();
//        $validator=Validator::make($inputs,[
//            'title'=>'unique:posts|required',
//            'description'=>'required'
//        ]);
//        if ($validator->fails()) {
//            # code...
//            return redirect('/home')->withErrors($validator);
//        }
//        $post = Post::create(array(
//            'title' => $request->title,
//            'description' => $request->description,
//            'author' => Auth::user()->id
//        ));
//        // $post = Post::create(array(
//        //     'title' => Input::get('title'),
//        //     'description' => Input::get('description'),
//        //     'author' => Auth::user()->id
//        // ));
//        return redirect()->route('home')->with('success', 'Post has been successfully added!');
//    }
//    public function getPost($id){
//        $post=post::find($id);
//        return view('post/post_detail', ['post'=>$post]);
//
//    }
//     public function editPost($id) {
//        $post = Post::find($id);
//        return view('post/edit_post', ['post' => $post]);
//    }
}

