@extends('master')

@section('header') @stop

@section('content')
	<h1>Logged In {{ $entity }}</h1>
	<a href="completeProfile" class="button">
	Complete Profile
	</a>
@stop

@section('footer') @stop