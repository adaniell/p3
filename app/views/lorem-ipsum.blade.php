@extends('_master')

@section('head')
	
@stop

@section('content')

<a href='/'>Home</a>

<h2>Lorem Ipsum Generator</h2>
<p>In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or 
visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on 
graphical elements such as font, typography, and layout.</p>


{{--	
	<form method="GET" action='/list'>
		<label form='query'>Search:</label>
		<input type='text' name='query' id='query'> 
		<input type='submit' value='Search'>
	</form>
--}}

	{{ Form::open(array('url' => '/lorem-ipsum', 'method' => 'POST')) }}

		{{ Form::label('query','Paragraphs') }}
	
		{{ Form::text('query'); }}

		{{ Form::submit('Generate'); }}

	{{ Form::close() }}


@stop

