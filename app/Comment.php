<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['movie_id','content','created_at','updated_at'];
	public function movie(){
    	return $this->belongsTo(Movie::class,"movie_id");
    }
}
