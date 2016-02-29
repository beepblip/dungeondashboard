@extends('layout')

@section('content')

<h1>Register</h1>

	{!! Form::open(['action'=>'Auth\AuthController@postRegister']) !!}

		<div class="form-group">
			{!! Form::label('name','Name') !!}
			{!! Form::text('name','',['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Email') !!}
			{!! Form::text('email','',['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Password') !!}
			{!! Form::password('password',['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password_confirmation','Confirm Password') !!}
			{!! Form::password('password_confirmation',['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Register',['class'=>'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

	{!! link_to_action('Auth\AuthController@postRegister','Sign Up!') !!}

@endsection