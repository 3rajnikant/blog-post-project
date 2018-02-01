<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, $id)

    {   	

            $this->validate(request(),['body' => 'required|min:2']);
    		$post=Post::findOrFail($id);
    		$comment=new Comment;
    		$comment->body=$request->body;
    		$comment->post_id=$post->id;
            $comment->user_id=auth()->id();
    		$comment->save();
    		return back();
       
    }
}
