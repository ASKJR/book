<html>
<head>
    @include('include.head')
</head>
<body>
    @include('include.header')
<div class="container"> 
    @include('include.sidebar')
    @yield('content')      
</div>
</body>
</html>
 @yield('own_js')
<script type="text/javascript">
 $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
 });
</script>
