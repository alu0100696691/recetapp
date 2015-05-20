<?php namespace App\Http\Controllers;

use Input;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Flash;

class ContactController extends Controller {

 // This function will show the view
 public function showForm()
 {
  $layout = "page4";
  return view('pages.contact')->with('layout', $layout);
 }

 public function handleFormPost()
 {
   $input = Input::only('name', 'email', 'msg');

  $validator = Validator::make($input,
      array(
          'name' => 'required',
          'email' => 'required|email',
          'msg' => 'required',
      )
  );

  if ($validator->fails())
  {
      return Redirect::to('contact')->with('errors', $validator->messages());
  } else { // the validation has not failed, it has passed


   // Send the email with the contactemail view, the user input
   Mail::send('contactemail', $input, function($message)
   {
       $message->from('joseantoniorpc@gmail.com', 'Recetapp');

       $message->to('joseantoniorpc@gmail.com');
   });

   Session::flash('message', 'Mail sent to Recetapp!');
   Session::flash('alert-class', 'alert-info');
   return Redirect::to('contact');


  }
}

}
