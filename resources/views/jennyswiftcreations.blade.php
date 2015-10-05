<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jennyswiftcreations</title>
    <link rel="stylesheet" href="tools/bootstrap.min.css">
    <link rel="stylesheet" href="tools/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    @include('templates.header')

	<div class="main">

        <h3>Hi and thanks for visiting! :) This site and my apps are still in progress, but feel free to have a look around and try out my demos!</h3>

        @include('templates.apps')
        @include('templates.reviews')


	</div>
	
	@include('templates.footer')
		
</body>
</html>