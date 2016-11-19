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

        <div class="codementor-success-story">
            <p class="alert alert-success">I was featured in the
                <a target="_blank" href="https://www.codementor.io/success-stories" class="alert-link">Codementor success stories.</a>
                :) Click
                <a target="_blank" href="https://www.codementor.io/success-stories/codementor-helps-beginner-gain-confidence" class="alert-link">here</a>
                to view my story.
            </p>
        </div>

        @include('templates.reviews')

	</div>
	
	@include('templates.footer')
		
</body>
</html>