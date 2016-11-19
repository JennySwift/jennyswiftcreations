<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jennyswiftcreations</title>
    @include('templates.head-links')
</head>
<body>
	<navbar></navbar>

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