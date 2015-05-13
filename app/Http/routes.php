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
    return view('pages.home');
});

// GET login
Route::get('login', function() {
  return view('pages.login');
});

//POST login
Route::post('login', 'AccountController@login');

Route::get('logout', function() {
  Auth::logout();
  return view('pages.home');
});



#Route::get('usuarios', array('uses' => 'UsuariosController@mostrarUsuarios'));
/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
