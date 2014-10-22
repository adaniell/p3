@extends('_master')

@section('head')
	
@stop

@section('content')


<h2>Lorem Ipsum Generator</h2>
<p>In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or 
visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on 
graphical elements such as font, typography, and layout.</p>
<p><i class="fa fa-angle-double-right"></i><a href='/lorem-ipsum'> Generate text</a></p>

<h2>Random User Generator</h2>
<p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>
<p><i class="fa fa-angle-double-right"></i><a href='/user'> Generate user</a></p>


{{--	
	<form method="GET" action='/list'>
		<label form='query'>Search:</label>
		<input type='text' name='query' id='query'> 
		<input type='submit' value='Search'>
	</form>
--}}

{{--	{{ Form::open(array('url' => '/list', 'method' => 'GET')) }}

		{{ Form::label('query','Search') }}
	
		{{ Form::text('query'); }}

		{{ Form::submit('Search'); }}

	{{ Form::close() }}
--}}

@stop

