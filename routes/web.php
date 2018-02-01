<?php
/*App::singleton('App\Billing\Stripe',function (){

	return new  \App\Billing\Stripe(config('services.stripe.secret'));
});*/
//dd(resolve('App\Billing\Stripe'));



/*App::instance('App\Billing\Stripe',$stripe);*/

/*$stripe = app('App\Billing\Stripe');
$stripe2 = app('App\Billing\Stripe');
$stripe3 = app('App\Billing\Stripe');*/





//Route::auth();

Route::get('/','PostsController@index')->name('home');

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create');

Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');
Route::get('/fifa','FifaController@fifa');
Route::get('/ucl','UclController@ucl');
Route::get('/standing','UclController@standing');

?>