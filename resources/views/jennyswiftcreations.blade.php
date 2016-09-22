<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jennyswiftcreations</title>
    {{--<link rel="stylesheet" href="tools/bootstrap.min.css">--}}
    <link rel="stylesheet" href="tools/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    @include('templates.header')

	<div class="main">



        {{--<div class="looking-for-work">--}}
            {{--<p class="alert alert-success">I am looking for remote work. If you are interested, I'd love to hear from you. :)</p>--}}
        {{--</div>--}}

        {{--<h2 id="looking-for-work"></h2>--}}
        @include('templates.apps')

	</div>
	
	@include('templates.footer')
		
</body>
</html>