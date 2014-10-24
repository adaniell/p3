<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Developers Best Friend')</title>
	<meta charset='utf-8'>

	<link rel='stylesheet' href='/css/stylesheet.css' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	
</head>
<body>

<div id="header">

	<h1>Developer's Best Friend <i class="fa fa-laptop black"></i><!--<i class="fa fa-file-code-o black"></i>--></h1>

</div>


<div id="content">
	
	@yield('content')

</div>

	
</body>
</html>
