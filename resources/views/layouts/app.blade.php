<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.head-links')
</head>
<body>
<div id="app">
    <navbar></navbar>

    <div class="main">
        @yield('content')
    </div>
</div>

@include('templates.footer')

</body>
</html>

