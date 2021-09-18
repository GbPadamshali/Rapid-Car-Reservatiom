
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="gauto | Car Rental HTML Template from Themescare">
      <meta name="keyword" content="taxi,car,rent,hire,transport">
      <meta name="author" content="Themescare">
      <!-- Title -->
      <title>Rapid Car Leasing Service</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="http://rapidcarlease.com/assets/img/favicon/favicon(new).png">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/animate.min.css">
      <!--Datepicker css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/jquery.datepicker.css">
      <!--Nice Select css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/nice-select.css">
      <!-- Lightgallery css -->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/lightgallery.min.css">
      <!--ClockPicker css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/jquery-clockpicker.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/slicknav.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="http://rapidcarlease.com/assets/css/responsive.css">
   </head>
   <body>
       
       
      <!-- Header Top Area Start -->
      <section class="gauto-header-top-area">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="header-top-left">
                     <p>Need Help?: <i class="fa fa-phone"></i> Call: +1 312-286-6404</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="header-top-right">
                     <a href="{{ url('login') }}">
                     <i class="fa fa-key"></i>
                     login
                     </a>
                     <a href="{{ url('register') }}">
                     <i class="fa fa-user"></i>
                     register
                     </a>
                     <!-- <div class="dropdown">
                        <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
                        <img src="http://rapidcarlease.com/assets/img/en.png" alt="lang" /> English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                           <li><img src="http://rapidcarlease.com/assets/img/ca.png" alt="lang" /> Canada</li>
                           <li><img src="http://rapidcarlease.com/assets/img/fa.png" alt="lang" /> French</li>
                           <li><img src="http://rapidcarlease.com/assets/img/ja.png" alt="lang" /> Japanese</li>
                        </ul>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Header Top Area End -->
       
       
      <!-- Main Header Area Start -->
      <header class="gauto-main-header-area">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="site-logo">
                     <a href="index.html">
                     <img src="http://rapidcarlease.com/assets/img/logo(new).png" alt="gauto" />
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-9">
                  <div class="header-promo">
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="http://rapidcarlease.com/assets/img/globe.png" alt="globe" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Chicago, USA</h3>
                           <p>1400 Renaissance Dr, #201,</p><p>Park Ridge, IL, 60068 </p>
                        </div>
                     </div>
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="http://rapidcarlease.com/assets/img/clock.png" alt="clock" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Monday to Friday</h3>
                           <p>9:00am - 6:00pm</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="header-action">
                     <a href="{{ url('login') }}"> Driver's Login </a>
                  </div>
               </div>
            </div>
         </div>
      </header>
       
      <!-- Breadcromb Area Start -->
      <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Login Page</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Login</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Login Area Start -->
      <section class="gauto-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-box">
                     <div class="login-page-heading">
                        <i class="fa fa-key"></i>
                        <h3>sign in</h3>
                     </div>
                     <form class="loginform pt-3" method="POST" action="{{ url('login') }}">
                    {{ csrf_field() }}
                     <div class="form-row">
                      @if ($errors->any())  
                      <div class="col-md-12">
                      <div class="alert alert-warning fade in alert-dismissible" style="margin-botton:10px;opacity:1;">  
                      <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                    </div>
                    </div>
                    @endif

                    @if(Session::has('message') && Session::has('status') && Session::has('status') == 'Success!')         

                    <div class="alert alert-success fade in alert-dismissible" style="margin-botton:10px;opacity: 1;">
                       
                       <strong>Success!</strong> {{ Session::get('message') }}
                   </div>
                    @else
                    @if(Session::get('message'))
                    <div class="alert alert-warning fade in alert-dismissible" style="margin-botton:10px;opacity: 1;">
                       
                       <strong>{{ Session::get('message') }}</strong> 
                   </div>
                    @endif
                    @endif
                  </div>
                        <div class="account-form-group">
                           <input type="text" placeholder="Username or Email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: #b52f2f; font-size: 14px; ">{{ $message }}</strong>
                                </span>
                            @enderror
                           <i class="fa fa-user"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="password" placeholder="Password" name="password" id="password">
                             @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: #b52f2f; font-size: 14px; ">{{ $message }}</strong>
                                </span>
                            @enderror
                           <i class="fa fa-lock"></i>
                        </div>
                        <div class="remember-row">
                           <p class="lost-pass">
                              <a href="{{ route('forgot') }}">forgot password?</a>
                           </p>
                           <p class="checkbox remember">
                              <input class="checkbox-spin" type="checkbox" id="Freelance">
                              <label for="Freelance"><span></span>Keep Me Signed In</label>
                           </p>
                        </div>
                        <p>
                           <button type="submit" class="gauto-theme-btn">Login now</button>
                        </p>
                     </form>
                     <div class="login-sign-up">
                        <a href="register.html">Do you need an account?</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Area End -->
       
       
      <!-- Footer Area Start -->
      <footer class="gauto-footer-area">
         <div class="footer-top-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="single-footer">
                        <div class="footer-logo">
                           <a href="#">
                           <img src="http://rapidcarlease.com/assets/img/logo(new).png" alt="footer-logo" />
                           </a>
                        </div>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna as aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="footer-address">
                           <h3>Head office</h3>
                           <p>125 Big fella St. Road, <span>New York, Hi 5654775</span></p>
                           <ul>
                              <li>Phone: 326487652 </li>
                              <li>Email: example@mail.com</li>
                              <li>Office Time: 9AM- 4PM</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="single-footer quick_links">
                        <h3>Quick Links</h3>
                        <ul class="quick-links">
                           <li><a href="#">About us</a></li>
                           <li><a href="#">Our Services</a></li>
                           <li><a href="#">Case Studies</a></li>
                           <li><a href="#">Contact us</a></li>
                        </ul>
                        <ul class="quick-links">
                           <li><a href="#">Testimonials</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                           <li><a href="#">latest News</a></li>
                        </ul>
                     </div>
                     <div class="single-footer newsletter_box">
                        <h3>newsletter</h3>
                        <form>
                           <input type="email" placeholder="Email Address" />
                           <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="single-footer">
                        <h3>Recent post</h3>
                        <ul>
                           <li>
                              <div class="single-footer-post">
                                 <div class="footer-post-image">
                                    <a href="#">
                                    <img src="http://rapidcarlease.com/assets/img/post-thumb-3.jpg" alt="footer post" />
                                    </a>
                                 </div>
                                 <div class="footer-post-text">
                                    <h3>
                                       <a href="#">
                                       Revealed: How to set goals for you and your team
                                       </a>
                                    </h3>
                                    <p>Posted on: Jan 12, 2019</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="single-footer-post">
                                 <div class="footer-post-image">
                                    <a href="#">
                                    <img src="http://rapidcarlease.com/assets/img/post-thumb-2.jpg" alt="footer post" />
                                    </a>
                                 </div>
                                 <div class="footer-post-text">
                                    <h3>
                                       <a href="#">
                                       Revealed: How to set goals for you and your team
                                       </a>
                                    </h3>
                                    <p>Posted on: Jan 12, 2019</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="single-footer-post">
                                 <div class="footer-post-image">
                                    <a href="#">
                                    <img src="http://rapidcarlease.com/assets/img/post-thumb-1.jpg" alt="footer post" />
                                    </a>
                                 </div>
                                 <div class="footer-post-text">
                                    <h3>
                                       <a href="#">
                                       apartment in the sky love three boys of his own.
                                       </a>
                                    </h3>
                                    <p>Posted on: Jan 12, 2019</p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="copyright">
                        <p>Lorem Ipsum All Rights Reserved.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-social">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
      <script src="http://rapidcarlease.com/assets/js/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="http://rapidcarlease.com/assets/js/popper.min.js"></script>
      <!--Bootstrap js-->
      <script src="http://rapidcarlease.com/assets/js/bootstrap.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="http://rapidcarlease.com/assets/js/owl.carousel.min.js"></script>
      <!--Lightgallery js-->
      <script src="http://rapidcarlease.com/assets/js/lightgallery-all.js"></script>
      <script src="http://rapidcarlease.com/assets/js/custom_lightgallery.js"></script>
      <!--Slicknav js-->
      <script src="http://rapidcarlease.com/assets/js/jquery.slicknav.min.js"></script>
      <!--Magnific js-->
      <script src="http://rapidcarlease.com/assets/js/jquery.magnific-popup.min.js"></script>
      <!--Nice Select js-->
      <script src="http://rapidcarlease.com/assets/js/jquery.nice-select.min.js"></script>
      <!-- Datepicker JS -->
      <script src="http://rapidcarlease.com/assets/js/jquery.datepicker.min.js"></script>
      <!--ClockPicker JS-->
      <script src="http://rapidcarlease.com/assets/js/jquery-clockpicker.min.js"></script>
      <!--Main js-->
      <script src="http://rapidcarlease.com/assets/js/main.js"></script>
   </body>
</html>

