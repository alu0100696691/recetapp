@extends('layouts.default')

@section('content')
<title>RECIPES</title>
  <div class="inner">
          <div class="main">
              <section id="content">
                  <div class="indent">
                    <div class="wrapper">
                      {!! Form::open(array('url' => 'newrecipes', 'class' =>'form-signin', 'id' => 'receta','enctype' => 'multipart/form-data')) !!}
                        @if(Session::has('errors'))
                         <div  class="alert alert-warning">
                          @foreach(Session::get('errors')->all() as $error_message)
                           <p>{{ $error_message }}</p>
                          @endforeach
                         </div>
                        @endif

                        @if(Session::has('message'))
                          <p class="alert {{ Session::get('alert-class') }}">{{ Session::get('message') }}</p>
                        @endif
                        <table id="tabla" class="table table-striped table-bordered">
                          <tr class="fila-base">
                            <td><div class="extra-wrap">
                              <textarea class="form-control" rows="7" id="descripcion"></textarea>
                            </div>{!! Form::file('image') !!}</td>
                            <td><button type="button" class="btn btn-default btn-sm btn-block agregar">New</button>
                                <button type="button" class="btn btn-primary btn-sm btn-block">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm btn-block eliminar">Delete</button></td>
                          </tr>
                        </table>
                        <p>{!! Form::submit('Guardar', array('class'=>'btn btn-lg btn-primary btn-block')) !!}</p>
                    {!! Form::close() !!}
                    </div>
                  </div>
              </section>
              <div class="block"></div>
          </div>
  </div>
</div>
@stop
