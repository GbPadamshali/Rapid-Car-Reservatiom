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
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon(new).png">
      <!-- Date Picker -->
      <link rel='stylesheet' href='https://btn.ninja/css/addons.css'>
      <!--Bootstrap css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/bootstrap.css') }}">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/font-awesome.min.css') }}">
      <!--Magnific css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/magnific-popup.css') }}">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/owl.theme.default.min.css') }}">
      <!--Animate css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/animate.min.css') }}">
      <!--Datepicker css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/jquery.datepicker.css') }}') }}">
      <!--Nice Select css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/nice-select.css') }}">
      <!-- Lightgallery css -->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/lightgallery.min.css') }}">
      <!--ClockPicker css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/jquery-clockpicker.min.css') }}">
      <!--Slicknav css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/slicknav.min.css') }}">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/style.css') }}">
      <!--Responsive css-->
      <link rel="stylesheet" href="{{ URL::asset('theme/authentication/css/responsive.css') }}">
      <style type="text/css">
         .icon-form-group i {
             height: 49px!important;
          }
          .error{
            color: #ec3323!important;
          }
      </style>
   </head>
   <body class="signup-body">
       
       
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
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Header Top Area End -->
       
       
      <!-- Main Header Area Start -->
      <header class="gauto-main-header-area" id="stickyHeader">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="site-logo">
                     <a href="index.html">
                     <img src="{{ URL::asset('theme/authentication/img/logo(new).png') }}" alt="gauto" />
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-9">
               </div>
               <div class="col-lg-6">
                  <div class="header-action">
                     <a href="{{ url('register') }}"> Register </a>
                     <a href="{{ url('login') }}"> Driver's Login </a>
                  </div>
               </div>
            </div>
         </div>
      </header>       
      
       
       
      <!-- Login Area Start -->
      <section class="gauto-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-box signup-login-box">
                     <div class="login-page-heading">
                        <i class="fa fa-key"></i>
                        <h3>sign Up</h3>
                     </div>
                     <form class="loginform pt-3" method="POST" action="{{ url('register') }}" id="register_form">

                        <div class="form-row">
                           <div class="form-group icon-form-group col-md-6">
                              <i class="fa fa-user"></i>
                              <input type="text" placeholder="First Name" name="first_name" class="form-control" required="">
                              <span id="err-first_name"></span>
                           </div>
   
                           <div class="form-group icon-form-group col-md-6">
                              <i class="fa fa-user"></i>
                              <input type="text" placeholder="Last Name" name="last_name" class="form-control">
                              <span id="err-last_name"></span>
                           </div>
                        </div>


                        <div class="form-group icon-form-group">
                           <i class="fa fa-envelope-o"></i>
                           <input type="email" placeholder="Email" name="email" class="form-control">
                           <span id="err-email"></span>
                        </div>

                        <div class="form-row">
                           <div class="form-group icon-form-group col-md-6">
                              <i class="fa fa-mobile" style="font-size:22px;"></i>
                              <input type="text" placeholder="Mobile No." name="phone" class="form-control">
                              <span id="err-phone"></span>
                           </div>
                           <div class="form-group icon-form-group col-md-6">
                              <i class="fa fa-calendar-plus-o"></i>
                              <input type="text" class="form-control jDatepicker" name="dob" placeholder="Select Date" value="{{  \Carbon\Carbon::now()->format('d-M-Y') }}">
                              <span id="err-dob"></span>
                           </div>
                        </div>
                        
                        <div class="form-row">
                           <div class="form-group icon-form-group col-md-6">
                              <i class="fa fa-lock"></i>
                              <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                              <span id="err-password"></span>
                              <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                           </div>
                           <div class="form-group icon-form-group col-md-6">
                              <i class="fa fa-lock"></i>
                              <input type="password" id="cpassword" placeholder="Confirm Password" name="password_confirmation" class="form-control">
                              <span id="err-cpassword"></span>
                              <span toggle="#cpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                           </div>
   
                           
                        </div>
                        <p>
                           <button type="submit" class="gauto-theme-btn">Register now</button>
                        </p>
                     </form>
                     <div class="login-sign-up">
                        <a href="{{ url('login') }}">Already have an account?</a>
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
                           <img src="{{ URL::asset('theme/authentication/img/logo(new).png') }}" alt="footer-logo" />
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
                                    <img src="{{ URL::asset('theme/authentication/img/post-thumb-3.jpg') }}" alt="footer post" />
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
                                    <img src="{{ URL::asset('theme/authentication/img/post-thumb-2.jpg') }}" alt="footer post" />
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
                                    <img src="{{ URL::asset('theme/authentication/img/post-thumb-1.jpg') }}" alt="footer post" />
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
      <script src="{{ URL::asset('theme/authentication/js/jquery.min.js') }}"></script>
      <!-- Popper JS -->
      <script src="{{ URL::asset('theme/authentication/js/popper.min.js') }}"></script>
      <!--Bootstrap js-->
      <script src="{{ URL::asset('theme/authentication/js/bootstrap.min.js') }}"></script>
      <!--Owl-Carousel js-->
      <script src="{{ URL::asset('theme/authentication/js/owl.carousel.min.js') }}"></script>
      <!--Lightgallery js-->
      <script src="{{ URL::asset('theme/authentication/js/lightgallery-all.js') }}"></script>
      <script src="{{ URL::asset('theme/authentication/js/custom_lightgallery.js') }}"></script>
      <!--Slicknav js-->
      <script src="{{ URL::asset('theme/authentication/js/jquery.slicknav.min.js') }}"></script>
      <!--Magnific js-->
      <script src="{{ URL::asset('theme/authentication/js/jquery.magnific-popup.min.js') }}"></script>
      <!--Nice Select js-->
      <script src="{{ URL::asset('theme/authentication/js/jquery.nice-select.min.js') }}"></script>
      <!-- Datepicker JS -->
      <script src="{{ URL::asset('theme/authentication/js/jquery.datepicker.min.js') }}"></script>
      <!--ClockPicker JS-->
      <script src="{{ URL::asset('theme/authentication/js/jquery-clockpicker.min.js') }}"></script>
      <!--Main js-->
      <script src="{{ URL::asset('theme/authentication/js/main.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js'></script>


      <script id="rendered-js">
            $('.jDatepicker').datepicker({
               //calendarWeeks: true,  
               todayHighlight: false,
               format: "d-M-yyyy",
               autoclose: true 
            });
      </script>

      <script type="text/javascript">
      $(document).ready(function() {

        /******************** validate  created by : vikas katariya (09-09-2021)********************/

        $('#register_form').validate({
            rules: {
               first_name: 'required',
               last_name: 'required',
               email: 'required',
               phone: 'required',
               dob: 'required',
               password : {
                     required : true,
                     minlength : 8
               },
               password_confirmation : {
                     required : true,
                     minlength : 8,
                     equalTo : '[name="password"]'
               }
            },
            messages: {
                first_name: {
                    required: "Please enter first name",
                },
                last_name: {
                    required: "Please enter last name",
                },
                email: {
                    required: "Please enter email",
                },
                phone: {
                    required: "Please enter mobile number",
                },
                dob: {
                    required: "Please enter date of birth",
                },
                password: {
                    required: "Please enter password",
                },
                password_confirmation: {
                    required: "Please enter confirm password",
                }
            },
            errorPlacement: function (error, element) {
               var name = element.attr("name");
               error.appendTo("#err-"+name);
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
     });
     </script>
   </body>
</html>

