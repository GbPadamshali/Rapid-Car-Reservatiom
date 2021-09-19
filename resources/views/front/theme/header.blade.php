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
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                         Logout 
                     </a>    
                     <form id="frm-logout" action="{{ url('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
<!--                      <a href="#">
                     <i class="fa fa-key"></i>
                     login
                     </a>
                     <a href="#">
                     <i class="fa fa-user"></i>
                     register
                     </a> -->
                     <!-- <div class="dropdown">
                        <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
                        <img src="{{ URL::asset('theme/front/img/en.png') }}" alt="lang" /> English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                           <li><img src="{{ URL::asset('theme/front/img/ca.png') }}" alt="lang" /> Canada</li>
                           <li><img src="{{ URL::asset('theme/front/img/fa.png') }}" alt="lang" /> French</li>
                           <li><img src="{{ URL::asset('theme/front/img/ja.png') }}" alt="lang" /> Japanese</li>
                        </ul>
                        </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>      <!-- Header Top Area End -->
      <!-- Main Header Area Start -->
      <header class="gauto-main-header-area">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="site-logo">
                     <a href="index.html">
                     <img src="{{ URL::asset('theme/front/img/logo(new).png') }}" alt="gauto" />
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-9">
                  <div class="header-promo">
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="{{ URL::asset('theme/front/img/globe.png') }}" alt="globe" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Chicago, USA</h3>
                           <p>1400 Renaissance Dr, #201,</p>
                           <p>Park Ridge, IL, 60068</p>
                        </div>
                     </div>
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="{{ URL::asset('theme/front/img/clock.png') }}" alt="clock" />
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
                     <a href="login.html"> Hello, {{ ucfirst(Auth::user()->first_name)}} {{ucfirst(Auth::user()->last_name)}}</a>
                  </div>
               </div>
            </div>
         </div>
      </header>