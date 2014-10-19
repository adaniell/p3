@extends('_master')

@section('head')
	
@stop

@section('content')

<a href='/'>Home</a>

<h2>Random User Generator</h2>
<p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>



{{--	
	<form method="GET" action='/list'>
		<label form='query'>Search:</label>
		<input type='text' name='query' id='query'> 
		<input type='submit' value='Search'>
	</form>
--}}

	{{ Form::open(array('url' => '/user', 'method' => 'POST')) }}

		{{ Form::label('faker','How many users?') }}
	
		{{ Form::text('faker', 'value', ['size' => '2']); }} <br/>

		{{ Form::label('faker','Include address?') }}

		{{ Form::checkbox('name', 'value', true, array('class' => 'name'));}}  <br/>

		{{ Form::label('faker','Include profile?') }}

		{{ Form::checkbox('name', 'value', true, array('class' => 'name'));}}  <br/>

		{{ Form::submit('Generate'); }}

	{{ Form::close() }}


@stop

