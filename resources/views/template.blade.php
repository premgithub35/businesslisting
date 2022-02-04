<!DOCTYPE html>
<html>
<head>
    <title>Business Listing &mdash;BUSINESS LISTING</title>

  @hasSection('description')
  <meta name="description" content="@yield('description')" />
  @endif
  @hasSection('keywords')
  <meta name="keywords" content="@yield('keywords')"/>
  @endif
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- Owl Carousel -->
		{{-- <link rel="stylesheet"href="{{asset('/frontend/css/owl.carousel.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('/frontend/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/rangeslider.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://urbanzila.com/wp-content/uploads/2018/11/cropped-UZ-Favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://urbanzila.com/wp-content/uploads/2018/11/cropped-UZ-Favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://urbanzila.com/wp-content/uploads/2018/11/cropped-UZ-Favicon-180x180.png" />
    <link rel='manifest' href='/manifest.json'> --}}

    @yield('stylesheet')
</head>

<body > 
  <div class="wrapper" id="app">
    <!-- Header -->
@include('frontend.layouts.nav')
    <!-- Footer -->
@include('frontend.layouts.footer')
</div>
  
<!--footer cdn end-->
<script type="text/javascript">
  if (navigator.serviceWorker.controller) {
    console.log('SW found, no need to register')
  }
  else {
        navigator.serviceWorker.register('http://127.0.0.1:8000/pwa-sw.js', {
           scope: './'
        }).then(function(reg) {
      console.log('SW registered for scope:'+ reg.scope);
    });
  }
  var APPURL = "127.0.0.1:8000";   
</script>
  <script src="{{asset('/frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('/frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('/frontend/js/jquery-ui.js')}}"></script>
  <script src="{{asset('/frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('/frontend/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('/frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('/frontend/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('/frontend/js/aos.js')}}"></script>
  <script src="{{asset('/frontend/js/rangeslider.min.js')}}"></script>
  <script src="{{asset('/frontend/js/main.js')}}"></script>
  <script src="{{asset('/frontend/js/typed.js')}}"></script>
  {{-- <script async="" src="https://cdn.ampproject.org/v0.js"></script> --}}

  <script>
    var typed = new Typed('.typed-words', {
    strings: ['Dentists','Restaurants','Nail Salon','Vets','Hotels','Doctors'],
   
    typeSpeed: 80,
    backSpeed: 80,
    backDelay: 4000,
    startDelay: 1000,
    loop: true,
    showCursor: true
    });
    </script>
    
@yield('javascript')
</body>
</html>