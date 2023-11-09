<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('assets/frontend/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/templatemo-cyborg-gaming.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/owl.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>
  <body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

@include('front._partials.header')
@yield('content')
@include('front._partials.footer')


      <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ url('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

  <script src="{{ url('assets/frontend/js/isotope.min.js') }}"></script>
  <script src="{{ url('assets/frontend/js/owl-carousel.js') }}"></script>
  <script src="{{ url('assets/frontend/js/tabs.js') }}"></script>
  <script src="{{ url('assets/frontend/js/popup.js') }}"></script>
  <script src="{{ url('assets/frontend/js/custom.js') }}"></script>
  
</body>
</html>