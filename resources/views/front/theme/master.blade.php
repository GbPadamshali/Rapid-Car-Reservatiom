<!DOCTYPE html>
<html lang="en">

   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="gauto | Car Rental HTML Template from Themescare" />
      <meta name="keyword" content="taxi,car,rent,hire,transport" />
      <meta name="author" content="Themescare" />
      <!-- Title -->
      <title>Rapid Car Leasing Service</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('theme/front/img/favicon/favicon(new).png') }}" />
      <!--Bootstrap css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/bootstrap.css') }}" />
      <!--Font Awesome css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/font-awesome.min.css') }}" />
      <!--Magnific css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/magnific-popup.css') }}" />
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/owl.carousel.min.css') }}" />
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/owl.theme.default.min.css') }}" />
      <!--Animate css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/animate.min.css') }}" />
      <!--Datepicker css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/jquery.datepicker.css') }}" />
      <!--Nice Select css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/nice-select.css') }}" />
      <!-- Lightgallery css -->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/lightgallery.min.css') }}" />
      <!--ClockPicker css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/jquery-clockpicker.min.css') }}" />
      <!--Slicknav css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/slicknav.min.css') }}" />
      <!--Site Main Style css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/style.css') }}" />
      <!--Responsive css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/front/css/responsive.css') }}" />

    @yield('css')

</head>

<body class="h-100">

    @include('front.theme.header')
    @yield('content')
    @include('front.theme.footer')

    <script src="{{ URL::asset('theme/front/js/jquery.min.js') }}"></script>
      <!-- Popper JS -->
    <script src="{{ URL::asset('theme/front/js/popper.min.js') }}"></script>
      <!--Bootstrap js-->
    <script src="{{ URL::asset('theme/front/js/bootstrap.min.js') }}"></script>
      <!--Owl-Carousel js-->
    <script src="{{ URL::asset('theme/front/js/owl.carousel.min.js') }}"></script>
      <!--Lightgallery js-->
    <script src="{{ URL::asset('theme/front/js/lightgallery-all.js') }}"></script>
    <script src="{{ URL::asset('theme/front/js/custom_lightgallery.js') }}"></script>
      <!--Slicknav js-->
    <script src="{{ URL::asset('theme/front/js/jquery.slicknav.min.js') }}"></script>
      <!--Magnific js-->
    <script src="{{ URL::asset('theme/front/js/jquery.magnific-popup.min.js') }}"></script>
      <!--Nice Select js-->
    <script src="{{ URL::asset('theme/front/js/jquery.nice-select.min.js') }}"></script>
      <!-- Datepicker JS -->
    <script src="{{ URL::asset('theme/front/js/jquery.datepicker.min.js') }}"></script>
      <!--ClockPicker JS-->
    <script src="{{ URL::asset('theme/front/js/jquery-clockpicker.min.js') }}"></script>
      <!--Main js-->
    <script src="{{ URL::asset('theme/front/js/main.js') }}"></script>


    @yield('js')
</body>

</html>
<script>
   function openCity(evt, cityName) {
       var i, x, tablinks;
       x = document.getElementsByClassName("city");
       for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
       }
       tablinks = document.getElementsByClassName("tablink");
       for (i = 0; i < x.length; i++) {
           tablinks[i].className = tablinks[i].className.replace(" active", "");
       }
       document.getElementById(cityName).style.display = "block";
       evt.currentTarget.className += " active";
   }
</script>  
<script type="text/javascript">
   $(document).ready(function(){
   
   var current_fs, next_fs, previous_fs; //fieldsets
   var opacity;
   
   $(".next").click(function(){
   
   current_fs = $(this).parent();
   next_fs = $(this).parent().next();
   
   //Add Class Active
   $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
   
   //show the next fieldset
   next_fs.show();
   //hide the current fieldset with style
   current_fs.animate({opacity: 0}, {
   step: function(now) {
   // for making fielset appear animation
   opacity = 1 - now;
   
   current_fs.css({
   'display': 'none',
   'position': 'relative'
   });
   next_fs.css({'opacity': opacity});
   },
   duration: 600
   });
   });
   
   $(".previous").click(function(){
   
   current_fs = $(this).parent();
   previous_fs = $(this).parent().prev();
   
   //Remove class active
   $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
   
   //show the previous fieldset
   previous_fs.show();
   
   //hide the current fieldset with style
   current_fs.animate({opacity: 0}, {
   step: function(now) {
   // for making fielset appear animation
   opacity = 1 - now;
   
   current_fs.css({
   'display': 'none',
   'position': 'relative'
   });
   previous_fs.css({'opacity': opacity});
   },
   duration: 600
   });
   });
   
   $('.radio-group .radio').click(function(){
   $(this).parent().find('.radio').removeClass('selected');
   $(this).addClass('selected');
   });
   
   $(".submit").click(function(){
   return false;
   })
   
   });
</script>