@extends('layout')

@section('content')

<h1>Login</h1>

	{!! Form::open(['action'=>'Auth\AuthController@postLogin']) !!}

		<div class="form-group">
			{!! Form::label('email','Email') !!}
			{!! Form::text('email','',['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Password') !!}
			{!! Form::password('password',['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Login',['class'=>'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

	{!! link_to_action('Auth\AuthController@postRegister','Sign Up!') !!}

@endsection