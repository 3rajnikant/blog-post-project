<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }
    public function store(Request $request)
    {
    	$this->validate(request(),[
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
    		 ]);


$user=new User;
$user->name=$request->name;
$user->email=$request->email;
$user->password=bcrypt($request->password);
$user->save();

    	/*$user = User::create(request(['name','email',bcrypt('password')]));
*/
    	auth()->login($user);
        \Mail::to($user)->send(new Welcome($user));

    	return redirect()->home();
    }
}
