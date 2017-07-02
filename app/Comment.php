<?php

namespace App;


class Comment extends Model
{
    public function post($value='')
    {
    	return $this->belongsTo(Post::class);
    }
    public function user($value='')
    {
    	return $this->belongsTo(User::class);
    }
}
