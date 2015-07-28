<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'HomeController@index');

//Route::get('home', 'HomeController@index');


Route::get('/', function()
{
    $layout = "page1";
    return view('pages.home')->with('layout', $layout);
});

Route::get('home', function()
{
  $layout = "page1";
  return view('pages.home')->with('layout', $layout);
});

// GET login
Route::get('login', function() {
  $layout = "page4";
  return view('pages.login')->with('layout', $layout);
});

//POST login
Route::post('login', 'AccountController@login');

Route::get('logout', function() {
  Auth::logout();
  $layout = "page1";
  return view('pages.home')->with('layout', $layout);
});


Route::get('register', function() {
  $layout = "page4";
  return view('pages.register')->with('layout', $layout);
});

Route::get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@handleFormPost');

Route::get('recipes', ['middleware' => 'auth',function()
{
    $layout = "page4";
    return view('pages.recipes')->with('layout', $layout);
}]);

Route::get('newrecipes', ['middleware' => 'auth',function()
{
    $layout = "page4";
    return view('pages.newrecipes')->with('layout', $layout);
}]);

Route::get('about', function()
{
    $layout = "page2";
    return view('pages.about')->with('layout', $layout);
});

Route::get('calendar', function()
{
    $layout = "page5";
    return view('pages.calendar')->with('layout', $layout);
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
