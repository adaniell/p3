@extends('_master')

@section('head')
	
@stop

@section('content')

<p><i class="fa fa-angle-double-left"></i> <a href='/'>Home</a></br>
<i class="fa fa-angle-double-left"></i> <a href='/user'>User Generator</a></p>

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

		{{ Form::label('length','Paragraphs') }}
	
		{{ Form::text('length','', ['size' => '2']); }} <br/>

		{{ Form::submit('Generate', ['class' => 'btn']); }}

	{{ Form::close() }}

<div class="password">	


@foreach ($paragraphs as $paragraph)
			<p>{{{$paragraph}}}</p>
		@endforeach
</div>

@stop

