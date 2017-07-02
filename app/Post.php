<?php

namespace App;
use Carbon\Carbon;


class Post extends Model
{
    public function comments($value='')
    {
    	return $this->hasMany(Comment::class);
    }
    public function addComment($body)
    {

    	$this->comments()->create(compact('body','post_id'));	
    }
    public function user($value='')
    {
    	return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {

    	if ($month = $filters['month']) {
    		$query->whereMonth('created_at', Carbon::parse($month)->month);
    	}
    	if ($year = $filters['year']) {
    		$query->whereYear('created_at', Carbon::parse($year)->year);
    	}
    }

    public static function archives($value='')
    {
    	return static::selectRaw('year(created_at) as year, monthname(created_at) as month, COUNT(*) published')
    	->groupBy('year','month')
    	->orderByRaw('min(created_at) desc')
    	->get()
    	->toArray();
    }
}
