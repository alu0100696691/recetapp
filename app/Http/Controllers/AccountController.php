<?php namespace App\Http\Controllers;

use Session;
//use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Input;
use App\Models\User;  //users;


class AccountController extends Controller {


  public function login() {
    // Getting all post data
    $data = Input::all();
    // Applying validation rules.
    $rules = array(
		'email' => 'required|email',
		'password' => 'required|min:6',
	     );
    $validator = Validator::make($data, $rules);
    if ($validator->fails()){
      // If validation falis redirect back to login.
      return Redirect::to('/login')->withInput(Input::except('password'))->withErrors($validator);
    }
    else {
      $userdata = array(
		    'email' => Input::get('email'),
		    'password' => Input::get('password')
		  );
      // doing login.
      if (Auth::validate($userdata)) {
        if (Auth::attempt($userdata)) {
          Session::flash('message', 'your login was successful!');
          Session::flash('alert-class', 'alert-info');
          return Redirect::intended('recipes');
        }
      }
      else {
        // if any error send back with message.
        Session::flash('error', 'Something went wrong');
        return Redirect::to('login');
      }
    }
  }
}
