<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = array('_token');

    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
