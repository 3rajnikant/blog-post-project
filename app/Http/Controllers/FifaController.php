<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;

class FifaController extends Controller
{
    public function fifa()
    {
    	return view('layouts.football');
    }
}
