<?php
namespace App;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostRepository{
	private $model;

	public function __construct(Post $model)
	{
		$this->model = $model;
	}

	public function getAll(){
		$posts= Post::with('user')->get();
		return $posts;

	}
} 
 