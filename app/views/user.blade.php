@extends('_master')

@section('content')

<p><i class="fa fa-angle-double-left"></i> <a href='/'>Home</a><br/>
<i class="fa fa-angle-double-left"></i> <a href='/lorem-ipsum'>Lorem Ipsum Generator</a></p>


<h2>Random User Generator</h2>
<p>This random user generator provides fake user data to assit in creating and testing databases.  </p>


{{ Form::open(array("url" => "user")) }}
	<p>
	{{ Form::label("length", "Users") }}
	{{ Form::text('length','', ['size' => '2']); }} <span class="small">Max. 50</span><br/>

	{{ Form::label("include_email", "Include email:") }}
	{{ Form::checkbox("include_email", "yes") }}<br/>

	{{ Form::label("include_phone", "Include phone number:") }}
	{{ Form::checkbox("include_phone", "yes") }}</p>

	<div class="errors">
		@foreach($errors->all() as $message)
    		<p><i class="fa fa-exclamation-triangle red"></i> {{ $message }}</p>
		@endforeach
	</div>

	<p>{{ Form::submit('Generate', ['class' => 'btn']) }}</p>
		
{{ Form::close() }}
	

	<div id="results">

		@if (Request::isMethod("post"))
		<p>
				@foreach($nameArray as $key => $value)
		    		{{ $value }}<br/>
				@endforeach
		</p>
		<p>	
				@foreach($emailArray as $key => $value)
		    		{{ $value }}<br/>
				@endforeach
		</p>
		<p>	
				@foreach($phoneArray as $key => $value)
		    		{{ $value }}<br/>
				@endforeach	
		</p>
		@endif


	</div>

</div>

@stop

