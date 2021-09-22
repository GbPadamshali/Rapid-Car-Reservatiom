 
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
                     @if(!empty(Auth::user()))
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                         Logout 
                     </a>    
                     <form id="frm-logout" action="{{ url('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
                     @else
                     <a href="{{ url('login') }}">
                     <i class="fa fa-key"></i>
                     login
                     </a>
                     <a href="{{ url('register') }}">
                     <i class="fa fa-user"></i>
                     register
                     </a>
                     @endif
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
      @if(!Auth::user())
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
                     @if(!empty(Auth::user()))
                     <a href="login.html"> Hello, {{ ucfirst(Auth::user()->first_name)}} {{ucfirst(Auth::user()->last_name)}}</a>
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </header>
      <section class="gauto-mainmenu-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-9">
                  <div class="mainmenu">
                     <nav>
                        <ul id="gauto_navigation">
                           <li><a href="index.html">home</a></li>
                           <li class="active"><a href="about.html">about</a></li>
                           <li>
                              <a href="#">Service</a>
                              <ul>
                                 <li><a href="service.html">All services</a></li>
                                 <li><a href="single-service.html">Service Details</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#">cars</a>
                              <ul>
                                 <li><a href="{{ route('user.carlist')}}">car listing</a></li>
                                 <li><a href="car-booking.html">car booking</a></li>
                              </ul>
                           </li>
                           <li><a href="gallery.html">gallery</a></li>
                           <li>
                              <a href="#">Shop</a>
                              <ul>
                                 <li><a href="products.html">products</a></li>
                                 <li><a href="single-product.html">product details</a></li>
                                 <li><a href="cart.html">Shoping Cart</a></li>
                                 <li><a href="checkout.html">checkout</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#">pages</a>
                              <ul>
                                 <li><a href="blog.html">blog</a></li>
                                 <li><a href="single-blog.html">single blog</a></li>
                                 <li><a href="404.html">404 not found</a></li>
                                 <li><a href="login.html">login</a></li>
                                 <li><a href="register.html">register</a></li>
                              </ul>
                           </li>
                           <li><a href="contact.html">contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                  <div class="main-search-right">
                      
                     <!-- Responsive Menu Start -->
                     <div class="gauto-responsive-menu"><div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                           <li><a href="index.html" role="menuitem" tabindex="-1">home</a></li>
                           <li class="active"><a href="about.html" role="menuitem" tabindex="-1">about</a></li>
                           <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                              <a href="#" tabindex="-1">Service</a>
                              <span class="slicknav_arrow">►</span></a><ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                 <li><a href="service.html" role="menuitem" tabindex="-1">All services</a></li>
                                 <li><a href="single-service.html" role="menuitem" tabindex="-1">Service Details</a></li>
                              </ul>
                           </li>
                           <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                              <a href="#" tabindex="-1">cars</a>
                              <span class="slicknav_arrow">►</span></a><ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                 <li><a href="car-listing.html" role="menuitem" tabindex="-1">car listing</a></li>
                                 <li><a href="car-booking.html" role="menuitem" tabindex="-1">car booking</a></li>
                              </ul>
                           </li>
                           <li><a href="gallery.html" role="menuitem" tabindex="-1">gallery</a></li>
                           <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                              <a href="#" tabindex="-1">Shop</a>
                              <span class="slicknav_arrow">►</span></a><ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                 <li><a href="products.html" role="menuitem" tabindex="-1">products</a></li>
                                 <li><a href="single-product.html" role="menuitem" tabindex="-1">product details</a></li>
                                 <li><a href="cart.html" role="menuitem" tabindex="-1">Shoping Cart</a></li>
                                 <li><a href="checkout.html" role="menuitem" tabindex="-1">checkout</a></li>
                              </ul>
                           </li>
                           <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                              <a href="#" tabindex="-1">pages</a>
                              <span class="slicknav_arrow">►</span></a><ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                 <li><a href="blog.html" role="menuitem" tabindex="-1">blog</a></li>
                                 <li><a href="single-blog.html" role="menuitem" tabindex="-1">single blog</a></li>
                                 <li><a href="404.html" role="menuitem" tabindex="-1">404 not found</a></li>
                                 <li><a href="login.html" role="menuitem" tabindex="-1">login</a></li>
                                 <li><a href="register.html" role="menuitem" tabindex="-1">register</a></li>
                              </ul>
                           </li>
                           <li><a href="contact.html" role="menuitem" tabindex="-1">contact</a></li>
                        </ul></div></div>
                     <!-- Responsive Menu Start -->
                      
                     <!-- Cart Box Start -->
                     <div class="header-cart-box">
                        <div class="login dropdown">
                           <button class="dropdown-toggle cart-icon" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span>2</span>
                           </button>
                           <div class="dropdown-menu cart-dropdown" aria-labelledby="dropdownMenu1">
                              <ul class="product_list">
                                 <li>
                                    <div class="cart-btn-product">
                                       <a class="product-remove" href="#">
                                       <i class="fa fa-times"></i>
                                       </a>
                                       <div class="cart-btn-pro-img">
                                          <a href="#">
                                          <img src="assets/img/cart-1.png" alt="product">
                                          </a>
                                       </div>
                                       <div class="cart-btn-pro-cont">
                                          <h4><a href="#">CAR SPOILERS</a></h4>
                                          <p>Quantity 2</p>
                                          <span class="price">
                                          $29.99
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="cart-btn-product">
                                       <a class="product-remove" href="#">
                                       <i class="fa fa-times"></i>
                                       </a>
                                       <div class="cart-btn-pro-img">
                                          <a href="#">
                                          <img src="assets/img/cart-2.jpg" alt="product">
                                          </a>
                                       </div>
                                       <div class="cart-btn-pro-cont">
                                          <h4><a href="#">CAR SPOILERS</a></h4>
                                          <p>Quantity 2</p>
                                          <span class="price">
                                          $29.99
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                              <div class="cart-subtotal">
                                 <p>
                                    Subtotal :
                                    <span class="drop-total">$59.98</span>
                                 </p>
                              </div>
                              <div class="cart-btn">
                                 <a href="#" class="cart-btn-1">View Cart</a>
                                 <a href="#" class="cart-btn-2">Checkout</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Cart Box End -->
                      
                     <!-- Search Box Start -->
                     <div class="search-box">
                        <form>
                           <input type="search" placeholder="Search">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                     <!-- Search Box End -->
                      
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endif