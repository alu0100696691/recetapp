@extends('layouts.default')

@section('content')
<br />
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-1 ">
			<div class="panel panel-default">
				<div class="panel-heading">Contact</div>
				<div class="panel-body">
             <form id="contact" method="post" class="form" role="form">
              @if(Session::has('errors'))
               <div class="alert alert-warning">
                @foreach(Session::get('errors')->all() as $error_message)
                 <p>{{ $error_message }}</p>
                @endforeach
               </div>
              @endif

              <div class="row">
               <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text"autofocus="">
               </div>
               <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="text">
               </div>
              </div>
              <textarea class="form-control" id="message" name="msg" placeholder="Message" rows="5"></textarea>
              <br>
              <div class="row">
               <div class="col-xs-12 col-md-12 form-group">
                <button class="btn btn-primary pull-right" type="submit">Submit</button>
               </div>
              </div>
             </form>
           </div>
         </div>
       </div>

         <div class="col-md-4  ">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.9071124398206!2d-16.320897543657683!3d28.482343890480845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd2b94248483a7c7f!2sEscuela+T%C3%A9cnica+Superior+de+Ingenier%C3%ADa+Inform%C3%A1tica+de+la+Universidad+de+la+Laguna!5e0!3m2!1ses!2ses!4v1431534050671" width="700" height="320" frameborder="0" style="border:0"></iframe>
         </div>

   </div>
   </div>
   <br />

@stop
