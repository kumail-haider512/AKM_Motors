<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AKM Motors</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}">

        <!-- Bootstrap and Jquery scripts -->
        

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/font-awesome-animation.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
        @yield('css')

    </head>

   <body class="jquerytouch">
	<div>
		<div id="container">
			<!-- Header -->
			@include('front.component.header')

			@yield('content')

			<!-- Footer -->
			@include('front.component.footer')

		</div>
	</div>

    </body>
        <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>

        <!-- Aditional scripts -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
        <script src="{{asset('js/initslider.js')}}"></script>
        <script src="{{asset('js/instafeed.min.js')}}"></script>
        <script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>

        <!-- Main scripts -->
        <script  src="{{asset('js/main.js')}}"></script>
        @yield('js')

</html> 