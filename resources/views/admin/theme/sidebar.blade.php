 <!--*******************
        Preloader start
    ********************-->
 <div id="preloader">
     <div class="sk-three-bounce">
         <div class="sk-child sk-bounce1"></div>
         <div class="sk-child sk-bounce2"></div>
         <div class="sk-child sk-bounce3"></div>
     </div>
 </div>
 <!--*******************
        Preloader end
    ********************-->


 <!--**********************************
        Main wrapper start
    ***********************************-->
 <div id="main-wrapper">

     <!--**********************************
            Nav header start
        ***********************************-->
     <div class="nav-header">
         <a href="index.html" class="brand-logo">
             <img class="logo-abbr" src="{{ asset('/theme/images/logo.png') }}" alt="">
             <img class="logo-compact" src="{{ asset('/theme/images/logo-text.png') }}" alt="">
             <img class="brand-title" src="{{ asset('/theme/images/logo-text.png') }}" alt="">
         </a>

         <div class="nav-control">
             <div class="hamburger">
                 <span class="line"></span><span class="line"></span><span class="line"></span>
             </div>
         </div>
     </div>

     @extends('admin.theme.header')

     <div class="quixnav">
         <div class="quixnav-scroll">
             <ul class="metismenu" id="menu">
                 <li><a><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a></li>
                 <li><a><i class="icon icon-single-04"></i><span class="nav-text">Users</span></a></li>
                 <li class="{{ activeMenu('cars') }}"><a href="{{ route('admin.cars.index') }}"><i class="icon icon-single-04"></i><span class="nav-text active">Cars</span></a></li>
             </ul>
         </div>
     </div>

     @yield('content')

     @extends('admin.theme.footer')

 </div>