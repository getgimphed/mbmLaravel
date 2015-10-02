@extends('master')

@section('header') 

<style type="text/css">
	h2{
		text-align: center;
		font-family: "Times New Roman", Times, serif;
	}
	.register, .company, .student{
		margin-top: 50px;
	}
</style>

@stop

@section('content')
	<h2> Sign In </h2>

	<div class="row">
		<div class="four columns offset-by-one student">
			<a href="/register/student" class="twelve columns button btn-1 glyphicon glyphicon-education" >Student</a>
		</div>

		<div class="four columns offset-by-two company">
			<a href="/register/company" class="twelve columns btn-2 button glyphicon glyphicon-king">Company</a>				
		</div>  
	</div>
@stop


@section('footer') @stop