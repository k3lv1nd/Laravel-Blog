<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
      protected $fillable = ['title', 'description', 'author'];

        //relationship between a user and a post
      public function user(){
        return $this->belongsTo(User::class,'author');
   	 }
}
