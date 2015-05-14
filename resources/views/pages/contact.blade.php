@extends('layouts.default')

@section('content')
  <div class="inner">
            <div class="main">
                <section id="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1 ">
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
                     <div class="row">
                       <div class="col-md-10 col-md-offset-1 ">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56117.1790306592!2d-16.30835520000001!3d28.469796999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc41cda3fa06883d%3A0x16fb5f572e86cb7f!2sEscuela+T%C3%A9cnica+Superior+de+Ingenier%C3%ADa+Agraria+de+la+Universidad+de+la+Laguna!5e0!3m2!1ses!2ses!4v1431617263695" width="790" height="450" frameborder="0" style="border:0"></iframe>
                       </div>
                     </div>
                     </div>
                </section>
                <div class="block"></div>
            </div>
        </div>
    </div>
@stop
