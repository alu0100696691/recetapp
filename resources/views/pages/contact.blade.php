@extends('layouts.default')

@section('content')
<br />
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-2 col-center-block">
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
     </div>
   </div>
   <br />

@stop
