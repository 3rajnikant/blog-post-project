<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class PostsController extends Controller
{
    public function __construct() 
        {
            $this->middleware('auth')->except(['index','show']);
        }

    public function index(Post $posts)
        {
          $posts = $posts->all();
            
        	return view('posts.index',compact('posts','archives'));
        }
     

 
      public function show(Post $post)
        {
        	 

        	return view('posts.show',compact('post'));
        }
          


      public function create()
        {
          if(auth()->user()){

            return view('posts.create');
          }
        	else{
            return view('sessions.create');
          }
        }
       

       public function store(Request $request)
            {

			$this->validate(request(),[
			'title' => 'required',
			'body' =>'required'

    	   ]);

        Post::create([
          'title' => request('title'),
          'body' =>request('body'),
          'user_id' =>auth()->id()


          ]);

            	       return redirect('/');
             }
     
}
