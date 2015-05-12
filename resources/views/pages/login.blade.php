@extends('layouts.default')

@section('content')
<br />
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-2 col-center-block">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
          {!! Form::open(array('url' => 'login', 'class' =>'form-signin')) !!}
            @if(Session::has('error'))
              <div class="alert-box success">
                <h2>{!! Session::get('error') !!}</h2>
              </div>
            @endif
              <div class="controls">
              {!! Form::text('email','',array('id'=>'email','class'=>'form-control span6','placeholder' => 'Please Enter your Email')) !!}
              <p class="errors">{!!$errors->first('email')!!}</p>
              </div>
              <div class="controls">
              {!! Form::password('password',array('id'=>'password','class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) !!}
              <p class="errors">{!!$errors->first('password')!!}</p>
              </div>
							<div class="checkbox">
			          <label>
			            <input type="checkbox" value="remember-me"> Remember me
			          </label>
		        	</div>
              <p>{!! Form::submit('Login', array('class'=>'btn btn-lg btn-primary btn-block')) !!}</p>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
<br />
@endsection
