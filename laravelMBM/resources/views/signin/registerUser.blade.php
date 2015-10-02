@extends('master')
@section('content')
	@if( $entity == 'student' )
	<h2 class="offset-by-three columns">Register as a new {{ strtoupper($entity) }}</h2>
	{!! Form::open(['method'=>'POST]','url'=>'/register' . $entity ]) !!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		{!! Form::hidden('entity',$entity) !!}
		<div class="six columns offset-by-three">
			{!! Form::label('name','Name :') !!}
		  	<span class="fa fa-user"></span>
			{!! Form::text('name',null,['class'=>'twelve columns','placeholder'=>'Name']) !!}
		</div>

		<div class="six columns offset-by-three">
			{!! Form::label('email','Email :') !!}
			<span class="fa fa-envelope"></span>
			{!! Form::email('email',null, ['class'=>'twelve columns','placeholder'=>'Email']) !!}
		</div>

		<div class="six columns offset-by-three">
			{!! Form::label('newRoll','New Roll No. (10 Digit) :') !!}
			<span class="fa fa-pencil"></span>
			{!! Form::text('newRoll',null, ['class'=>'twelve columns','placeholder'=>'13CSE44023']) !!}
		</div>

		<div class="six columns offset-by-three">
			{!! Form::label('password','Password :') !!}
			<span class="fa fa-key"></span>
			{!! Form::input('password','password',null, ['class'=>'twelve columns','placeholder'=>'Password']) !!}
		</div>

		<div class="six columns offset-by-three">
			{!! Form::label('password_confirmation','Password Confirm:') !!}
			<span class="fa fa-key"></span>
			{!! Form::input('password','password_confirmation',null, ['class'=>'twelve columns','placeholder'=>'Password Confirm']) !!}
		</div>


		<div class="six columns offset-by-three">
		{!! Form::submit('Register',['class'=>'twelve columns btn button-primary']) !!}
	
	{!! Form::close() !!}
	@else
		<h2 class="columns offset-by-three">Register as a new {{ strtoupper($entity) }}</h2>

		{!! Form::open(['method'=>'POST]','url'=>'/register/' . $entity ]) !!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		{!! Form::hidden('entity',$entity) !!}

		<div class="six columns offset-by-three">
		{!! Form::label('compName','Company Name :') !!}
		<span class="fa fa-user"></span>
		{!! Form::text('compName',null,['class'=>'twelve columns','placeholder'=>'Company Name']) !!}
		</div>

		<div class="six columns offset-by-three">
		{!! Form::label('compEmail','Email :') !!}
		<span class="fa fa-envelope"></span>
		{!! Form::email('compEmail',null, ['class'=>'twelve columns','placeholder'=>'Email']) !!}
		</div>

		<div class="six columns offset-by-three">
		{!! Form::label('hrMob','Mobile (Don\'t prefix 0 or +91)') !!}
		<span class="fa fa-mobile"></span>
		{!! Form::text('hrMob',null, ['class'=>'twelve columns','placeholder'=>'8559930375']) !!}
		</div>

		<div class="six columns offset-by-three">
		{!! Form::label('password','Password :') !!}
		<span class="fa fa-key"></span>
		{!! Form::input('password','password',null, ['class'=>'twelve columns','placeholder'=>'Password']) !!}
		</div>

		<div class="six columns offset-by-three">
		{!! Form::label('password_confirmation','Password Confirm:') !!}
		<span class="fa fa-key"></span>
		{!! Form::input('password','password_confirmation',null, ['class'=>'twelve columns','placeholder'=>'Password Confirm']) !!}
		</div>


		<div class="six columns offset-by-three">
		{!! Form::submit('Register',['class'=>'button-primary twelve columns']) !!}
	
	{!! Form::close() !!}
	@endif
	<br><br><br>
	@if($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	@endif
@stop
