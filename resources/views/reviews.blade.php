<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jennyswiftcreations</title>
    <link rel="stylesheet" href="tools/bootstrap.min.css">
    <link rel="stylesheet" href="tools/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    @include('templates.header')

	<div class="main">

        <div class="codementor-success-story">
            <p class="alert alert-success">I am featured in the
                <a href="https://www.codementor.io/success-stories" class="alert-link">Codementor success stories.</a>
                :) Click
                <a href="https://www.codementor.io/success-stories/codementor-helps-beginner-gain-confidence" class="alert-link">here</a>
                to view my story.
            </p>
        </div>

        @include('templates.reviews')

	</div>
	
	@include('templates.footer')
		
</body>
</html>