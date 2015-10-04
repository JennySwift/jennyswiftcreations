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

        <div class="multi-app-container">
            <div class="app-container">
                <h1>Budget App</h1>

                <div>
                    This is my main app. Originally made for my brother, with the goal of providing a useful way to budget when income is unpredictable.
                </div>

                <div class="btn-container">
                    {{--<button class="btn btn-warning">Info</button>--}}
                    <a class="btn btn-success" href="http://budget_playground.jennyswiftcreations.com/">Demo</a>
                </div>

                <img src="img/budget-app.png" alt=""/>

            </div>
        </div>


	</div>
	
	@include('templates.footer')
		
</body>
</html>