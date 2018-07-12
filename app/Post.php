<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'author'];

    //relationship between a user and a post
    public function user()
    {
        return $this->belongsTo(User::class, 'author');
    }
    //mutators;


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

//    public function setDobAttribute($value)
//    {
//        $this->attributes['created_at'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
//    }

    public function scopeId($query,$userId)
    {
        return $query->where('author', $userId);
    }


}
