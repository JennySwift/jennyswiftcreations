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

        <div class="looking-for-work">
            <p class="alert alert-success">I am looking for remote work. If you are interested, I'd love to hear from you. :)</p>
        </div>

        {{--<h2 id="looking-for-work"></h2>--}}
        @include('templates.apps')

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