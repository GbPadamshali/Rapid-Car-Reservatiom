@extends('front.theme.master')
@section('content')
<section class="gauto-slider-area fix">
         <div class="gauto-slide owl-carousel owl-loaded owl-drag">
            
            
         <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-4047px, 0px, 0px); transition: all 0s ease 0s; width: 8094px;"><div class="owl-item cloned" style="width: 1349px;"><div class="gauto-main-slide slide-item-1">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p class="animated fadeInDown" style="opacity: 1;">for rent $65 per day</p>
                                 <h2 class="animated fadeInUp" style="opacity: 1;">Reserved Now &amp; Get <span>50% Off</span></h2>
                                 <a href="#" class="gauto-btn animated fadeInDown" style="opacity: 1;">Reserve Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div></div><div class="owl-item cloned" style="width: 1349px;"><div class="gauto-main-slide slide-item-2">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p class="animated fadeInDown" style="opacity: 1;">for rent $70 per day</p>
                                 <h2 class="animated fadeInUp" style="opacity: 1;">Reserved Now &amp; Get <span>50% Off</span></h2>
                                 <a href="#" class="gauto-btn animated fadeInDown" style="opacity: 1;">Reserve Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div></div><div class="owl-item" style="width: 1349px;"><div class="gauto-main-slide slide-item-1">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p style="opacity: 1;" class="animated fadeInDown">for rent $65 per day</p>
                                 <h2 style="opacity: 1;" class="animated fadeInUp">Reserved Now &amp; Get <span>50% Off</span></h2>
                                 <a href="#" class="gauto-btn animated fadeInDown" style="opacity: 1;">Reserve Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div></div><div class="owl-item active" style="width: 1349px;"><div class="gauto-main-slide slide-item-2">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p style="opacity: 1;" class="animated fadeInDown">for rent $70 per day</p>
                                 <h2 style="opacity: 1;" class="animated fadeInUp">Reserved Now &amp; Get <span>50% Off</span></h2>
                                 <a href="#" class="gauto-btn animated fadeInDown" style="opacity: 1;">Reserve Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div></div><div class="owl-item cloned" style="width: 1349px;"><div class="gauto-main-slide slide-item-1">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p class="animated fadeInDown" style="opacity: 1;">for rent $65 per day</p>
                                 <h2 class="animated fadeInUp" style="opacity: 1;">Reserved Now &amp; Get <span>50% Off</span></h2>
                                 <a href="#" class="gauto-btn animated fadeInDown" style="opacity: 1;">Reserve Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div></div><div class="owl-item cloned" style="width: 1349px;"><div class="gauto-main-slide slide-item-2">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p class="animated fadeInDown" style="opacity: 1;">for rent $70 per day</p>
                                 <h2 class="animated fadeInUp" style="opacity: 1;">Reserved Now &amp; Get <span>50% Off</span></h2>
                                 <a href="#" class="gauto-btn animated fadeInDown" style="opacity: 1;">Reserve Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><img src="{{ URL::asset('theme/front/img/prev-1.png') }}"></button><button type="button" role="presentation" class="owl-next"><img src="{{ URL::asset('theme/front/img/next-1.png') }}"></button></div><div class="owl-dots disabled"></div></div>
      </section>
      <section class="gauto-find-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="find-box">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="find-text">
                              <h3>Find Your Car</h3>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="find-form">
                              <form action="car-listing.html">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <p>
                                          <input id="reservation_date" name="reservation_date" placeholder="Journey Date" data-select="datepicker" type="text">
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                          <input type="text" class="form-control" placeholder="Journey Time">
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <button type="submit" class="gauto-theme-btn">Find Car</button>
                                       </p>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gauto-offers-area" style="margin-top: 100px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>Hot Offer</h4>
                     <h2>Our Best Deal</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="offer-tabs">
                     <!-- <ul class="nav nav-tabs" id="offerTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All Brands</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="nissan-tab" data-toggle="tab" href="#nissan" role="tab" aria-controls="nissan" aria-selected="false">nissan</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="Toyota-tab" data-toggle="tab" href="#Toyota" role="tab" aria-controls="Toyota" aria-selected="false">Toyota</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="Audi-tab" data-toggle="tab" href="#Audi" role="tab" aria-controls="Audi" aria-selected="false">Audi</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="mercedes-tab" data-toggle="tab" href="#mercedes" role="tab" aria-controls="mercedes" aria-selected="false">mercedes</a>
                        </li>
                     </ul> -->
                     <div class="tab-content" id="offerTabContent">
                        <!-- All Tab Start -->
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/offer-toyota.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Alphard</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/nissan-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Nissan 370Z</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/audi-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$45.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/bmw-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>BMW X3</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/audi-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- All Tab End -->
                         
                        <!-- Nissan Tab Start -->
                        <div class="tab-pane fade" id="nissan" role="tabpanel" aria-labelledby="nissan-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/bmw-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>BMW X3</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/audi-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Nissan Tab End -->
                         
                        <!-- Toyota Tab Start -->
                        <div class="tab-pane fade" id="Toyota" role="tabpanel" aria-labelledby="Toyota-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/nissan-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Nissan 370Z</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/offer-toyota.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Alphard</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/audi-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$45.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Toyota Tab Start -->
                         
                        <!-- Audi Tab Start -->
                        <div class="tab-pane fade" id="Audi" role="tabpanel" aria-labelledby="Audi-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/audi-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$45.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/nissan-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Nissan 370Z</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Alphard</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Audi Tab End -->
                         
                        <!-- Marcedes Tab Start -->
                        <div class="tab-pane fade" id="mercedes" role="tabpanel" aria-labelledby="mercedes-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/marcedes-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>marcedes S-class</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/audi-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$45.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/nissan-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Nissan 370Z</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Marcedes Tab End -->
                        <div class="tab-pane fade" id="mercedes" role="tabpanel" aria-labelledby="mercedes-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/marcedes-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>marcedes S-class</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/audi-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$45.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ URL::asset('theme/front/img/nissan-offer.png') }}" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Nissan 370Z</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car-booking.html" class="offer-btn-1">Rent Now</a>
                                          <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                       
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="gauto-btn">Show More</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gauto-promo-area">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="promo-box-left">
                     <img src="{{ URL::asset('theme/front/img/toyota-offer-2.png') }}" alt="promo car">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="promo-box-right">
                     <h3>Do You Want To Earn With Us? So Don't be Late.</h3>
                     <a href="#" class="gauto-btn">Become a drive</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gauto-call-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="call-box">
                     <div class="call-box-inner">
                        <h2>With Over <span>150+</span> Partners Locations</h2>
                        <p>Labore dolore magna aliqua ipsum veniam quis nostrud exercitation voluptate velit cillum dolore feu fugiat nulla excepteur sint occaecat sed ipsum cupidatat proident culpa exercitation ullamco laboris aliquik.</p>
                        <div class="call-number">
                           <div class="call-icon">
                              <i class="fa fa-phone"></i>
                           </div>
                           <div class="call-text">
                              <p>need any help?</p>
                              <h4><a href="#">123 456 7890</a></h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection