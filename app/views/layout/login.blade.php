<!doctype html>
<html>
<head>
    @include('include.head')
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div id="fullscreen_bg" class="fullscreen_bg"/>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
 @yield('own_js')