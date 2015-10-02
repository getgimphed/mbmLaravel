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
		<div class="offset-by-one four columns student">
			<a href="/signIn/student"  class="twelve columns button btn-1">Student</a>
		</div>

		<div class="offset-by-two four columns company">
			<a href="/signIn/company" class="twelve columns button btn-2">Company</a>				
		</div>  
	</div>
@stop


@section('footer') @stop