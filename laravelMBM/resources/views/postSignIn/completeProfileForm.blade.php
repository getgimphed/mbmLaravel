@extends('master')

@section('content')
	<h2 class="offset-by-three columns">Complete Profile</h2>
	{!! Form::open(['method'=>'POST']) !!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="six columns offset-by-three">
			{!! Form::label('hrName','H.R. Name :') !!}
		  	<span class="fa fa-user"></span>
			{!! Form::text('hrName',null,['class'=>'twelve columns','placeholder'=>'H.R. Name']) !!}
		</div>

		<div class="six columns offset-by-three">
			{!! Form::label('compUrl','Company URL :') !!}
			<span class="fa fa-chrome"></span>
			{!! Form::text('compUrl',null, ['class'=>'twelve columns','placeholder'=>'www.mbm.ac.in/company-profile/job-profile']) !!}
		</div>

		<div class="six columns offset-by-three">
			{!! Form::label('compAdd','Company Full Address :') !!}
			<span class="fa fa-map"></span>
			{!! Form::textarea('compAdd',null, ['class'=>'twelve columns','placeholder'=>'M.B.M Engg. College, Ratanada, Jodhpur. 342001']) !!}
		</div>

		<div class="six columns offset-by-three">
			{!! Form::label('compCity','Company Recruitment Office City :') !!}
			<span class="fa fa-map-marker"></span>
			{!! Form::text('compCity',null, ['class'=>'twelve columns','placeholder'=>'Jodhpur']) !!}
		</div>

		<div class="six columns offset-by-three">
			{!! Form::label('hrMob','H.R. Mobile (Don\'t Prefix 0/+91):') !!}
			<span class="fa fa-mobile-phone"></span>
			{!! Form::text('hrMob',null, ['class'=>'twelve columns','placeholder'=>'8559930375']) !!}
		</div>

		<div class="six columns offset-by-three">
			{!! Form::label('hrPhone','H.R. Mobile/Phone Alternative :') !!}
			<span class="fa fa-phone"></span>
			{!! Form::text('hrPhone',null, ['class'=>'twelve columns','placeholder'=>'0291-2551566']) !!}
		</div>

		<div class="six columns offset-by-three">
		{!! Form::submit('Complete Profile',['class'=>'twelve columns btn button-primary']) !!}
	

	{!! Form::close() !!}

@stop