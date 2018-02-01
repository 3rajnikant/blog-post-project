<?php

namespace App;



class Post extends Model
{
   public function comments()
   {
   	return $this->hasMany('App\Comment');
   }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
  /* public function addComment($body)
   {
Comment::create([
'body' => $body,
'post_id' => $this->id

	]);
   }*/
}
