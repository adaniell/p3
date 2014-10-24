@extends('_master')

@section('content')

<p><i class="fa fa-angle-double-left"></i> <a href='/'>Home</a></br>
<i class="fa fa-angle-double-left"></i> <a href='/user'>User Generator</a></p>

<h2>Lorem Ipsum Generator</h2>
<p>Lorem Ipsum is simply fake latin based text used for placeholder content in the publishing and design world. It helps give the look and feel 
of readable English text that fills your layout while under development. The main purpose is to take the focus off of the content, and to put 
it on the design (layout, typography, graphics, etc.). </p>


{{ Form::open(array("url" => "lorem-ipsum")) }}

	<p>
	{{ Form::label('length', 'Paragraphs') }} 
	{{ Form::text('length','', ['size' => '2']); }} <span class="small">Max. 50</span></p>

	<div class="errors">
    	@foreach($errors->all() as $message)
       		<p><i class="fa fa-exclamation-triangle red"></i> {{ $message }}</p>
       	@endforeach
    </div>

    {{ Form::submit('Generate', ['class' => 'btn']); }}

{{ Form::close() }}
        
<div id="results">	

	@if (Request::isMethod("post"))
    	{{ $textResult }}
	@endif

</div>

@stop

