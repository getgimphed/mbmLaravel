@extends('master')

@section('header') 
<style type="text/css">
	h2{
		text-align: center;
	}

</style>
@stop

@section('content')
		<h2> Sign In {{ strtoupper($entity) }}</h2>
		
		{!! Form::open() !!}
		{!! Form::hidden('entity',$entity) !!}
		<div class="six columns offset-by-three"> 
			{!! Form::label('email','Email :') !!}
			{!! Form::email('email',null,['class'=>'twelve columns','placeholder'=>'vedant@example.com']) !!}	
		</div>	

		<div class="six columns offset-by-three">
			{!! Form::label('password','Password :') !!}
			{!! Form::password('password',['class'=>'twelve columns','placeholder'=>'Password']) !!}	
		</div>
		
		 <div class="seven columns offset-by-three">
		 	{!! Form::label('remember', 'Remember Me') !!}
       		 <input type="checkbox" style="display:inline;" name="remember">
   		 </div>

	    <div class="six columns offset-by-three">
	        <button class="twelve columns button-primary" type="submit">Login Securely</button>
	    </div>
@stop

@section('footer') @stop