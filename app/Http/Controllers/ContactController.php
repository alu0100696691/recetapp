<?php namespace App\Http\Controllers;

use Input;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller {

 // This function will show the view
 public function showForm()
 {
  return view('pages.contact');
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

   // Specify a route to go to after the message is sent to provide the user feedback
   return Redirect::to('/');
  }
}

}
