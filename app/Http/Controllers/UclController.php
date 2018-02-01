<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;

class UclController extends Controller
{
     public function ucl()
    {
        return view('layouts.ucl');
    }
 public function standing()
    {
        return view('layouts.standing');
    }
}
