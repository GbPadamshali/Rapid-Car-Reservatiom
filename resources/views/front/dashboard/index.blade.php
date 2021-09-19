@extends('front.theme.master')
@section('content')
    <style type="text/css">
        .cross{
            color: red;
        }
        .check{
            color: greem;
        }
    </style>
    <div class="alert alert-danger">
        @if(Auth::user()->verified != 1)
         <div class="container">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons"></i></span>
            </button>
            <i class="fa fa-warning"></i>
            <b>Error Alert:</b> Your email is not verified please verify your email first.
        </div>
        @endif
    </div>
      <section class="account-page-tab">
         <div class="container">
            <div class="row account-page-header">
               <div class="col-lg-3">
                  <div class="account-header-logo">
                     <a href="index.html">
                     <img src="{{ URL::asset('theme/front/img/logo(new).png') }}" alt="gauto">
                     </a> 
                  </div>
               </div>
               <div class="col-lg-9">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                     <div class="container-fluid">
                        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                           <ul class="navbar-nav">
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Message</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Rewards</a>
                              </li>
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <img src="{{ URL::asset('theme/front/img/globe.png') }}">
                                 </a>
                                 <ul class="dropdown-menu" class="dropdown-menu-toggle" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Account</a></li>
                                    <li><a class="dropdown-item" href="#">Rewards</a></li>
                                    <li><a class="dropdown-item" href="#">Message</a></li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="homebtn">
                  <a href="#" class="gauto-btn"><i class="fa fa-angle-left"></i>Back to Home</a>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <div class="account-tab-title">
                     <div class="account-user-img">
                        <!-- <img src="{{ URL::asset('theme/front/img/globe.png') }}"> -->
                        <h2 class="w3-bar-item">Dashboard</h2>
                     </div>
                     <button class="tablink" onclick="openCity(event, 'Profile')">Profile</button>
                     <button class="tablink" onclick="openCity(event, 'Bookings')">Bookings</button>
                     <button class="tablink" onclick="openCity(event, 'ApprovetoDrive')">Approve to Drive</button>
                     <button class="tablink" onclick="openCity(event, 'Favorites')">Favorites</button>
                     <button class="tablink" onclick="openCity(event, 'paymentSettings')">payment Settings</button>
                     <button class="tablink" onclick="openCity(event, 'Logout')">Logout</button>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="tabcontent">
                     <div id="Profile" class="w3-container city">
                        <div class="tabcontent-title-section">
                           <h2 class="tabcontent-title">Profile</h2>
                           <a href="#" class="edit-btn">edit</a>
                        </div>
                        <div class="tabcontent-profile-table">
                           <div class="tabcontent-profile-table-detail">
                              <p>Name</p>
                              <p>Date Of Birth</p>
                              <p>Email  @if(Auth::user()->verified)<i class="fa fa-check check"></i>@else<i class="fa fa-close cross"></i>@endif</p>
                              <p>Phone  @if(Auth::user()->phone_verified)<i class="fa fa-check check"></i>@else<i class="fa fa-close cross"></i>@endif</p>
                              <p>Approve To Drive</p>
                           </div>
                           <?php
                            $timestamp = strtotime(Auth::user()->dob);
                            $new_date_format = date('dS M, Y', $timestamp);
                            ?>
                           <div class="tabcontent-profile-table-detail">
                              <p>{{ ucfirst(Auth::user()->first_name)}} {{ucfirst(Auth::user()->last_name)}}</p>
                              <p>{{ $new_date_format }}</p>
                              <p>{{ Auth::user()->email }}</p>
                              <p>{{  Auth::user()->phone }}</p>
                              <p>Verify ID</p>
                           </div>
                        </div>
                     </div>
                     <div id="Bookings" class="w3-container city" style="display: none;">
                        <div class="tabcontent-title-section">
                           <h2 class="tabcontent-title">Bookings</h2>
                        </div>
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>Preview</th>
                                    <th>Product</th>
                                    <th>Date of Booking</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <!--  <th>Action</th> -->
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="shop-cart-item">
                                    <td class="gauto-cart-preview">
                                       <a>
                                       <img src="{{ URL::asset('theme/front/img/cart-1.png') }}" alt="cart-1">
                                       </a>
                                    </td>
                                    <td class="gauto-cart-product">
                                       <a>
                                          <p>car disk break</p>
                                       </a>
                                    </td>
                                    <td class="gauto-cart-quantity">
                                       <date>15-10-2021</date>
                                    </td>
                                    <td class="gauto-cart-price">
                                       <p>$180</p>
                                    </td>
                                    <td class="gauto-cart-total">
                                       <p>$180</p>
                                    </td>
                                    <!-- <td class="gauto-cart-close">
                                       <a href="#"><i class="fa fa-times"></i></a>
                                       </td> -->
                                 </tr>
                                 <tr class="shop-cart-item">
                                    <td class="gauto-cart-preview">
                                       <a>
                                       <img src="{{ URL::asset('theme/front/img/cart-2.jpg') }}" alt="cart-1">
                                       </a>
                                    </td>
                                    <td class="gauto-cart-product">
                                       <a>
                                          <p>shock absorber</p>
                                       </a>
                                    </td>
                                    <td class="gauto-cart-quantity">
                                       <date>1-05-1925</date>
                                    </td>
                                    <td class="gauto-cart-price">
                                       <p>$90</p>
                                    </td>
                                    <td class="gauto-cart-total">
                                       <p>$90</p>
                                    </td>
                                    <!-- <td class="gauto-cart-close">
                                       <a href="#"><i class="fa fa-times"></i></a>
                                       </td> -->
                                 </tr>
                              </tbody>
                           </table>
                           <div class="more-booking-btn">
                              <a href="#" class="gauto-btn">more booking</a>
                           </div>
                        </div>
                     </div>
                     <div id="ApprovetoDrive" class="w3-container city" style="display: none;">
                        <div class="tabcontent-title-section">
                           <h2 class="tabcontent-title">Approve to Drive</h2>
                        </div>
                        <div class="container-fluid">
                           <div class="row justify-content-center mt-0">
                              <div class="col-11 col-sm-9 col-md-7 col-lg-12 text-center p-0 mt-3 mb-2">
                                 <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2><strong>Sign Up Your User Account</strong></h2>
                                    <p>Fill all form field to go to next step</p>
                                    <div class="row">
                                       <div class="col-md-12 mx-0">
                                          <form id="msform">
                                             <!-- progressbar -->
                                             <ul id="progressbar">
                                                <li class="active" id="account"><strong>Verify Phone</strong></li>
                                                <li id="personal"><strong>Personal</strong></li>
                                                <li id="payment"><strong>Payment</strong></li>
                                                <li id="confirm"><strong>Finish</strong></li>
                                             </ul>
                                             <!-- fieldsets -->
                                             <fieldset>
                                                <div class="form-card">
                                                   <h2 class="fs-title">Account Information</h2>
                                                   <input type="email" name="email" placeholder="Email Id" /> <input type="text" name="uname" placeholder="UserName" /> <input type="password" name="pwd" placeholder="Password" /> <input type="password" name="cpwd" placeholder="Confirm Password" />
                                                </div>
                                                <input type="button" name="next" class="next action-button" value="Next Step" />
                                             </fieldset>
                                             <fieldset>
                                                <div class="form-card">
                                                   <h2 class="fs-title">Personal Information</h2>
                                                   <input type="text" name="fname" placeholder="First Name" /> <input type="text" name="lname" placeholder="Last Name" /> <input type="text" name="phno" placeholder="Contact No." /> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                                </div>
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                             </fieldset>
                                             <fieldset>
                                                <div class="form-card">
                                                   <h2 class="fs-title">Payment Information</h2>
                                                   <div class="radio-group">
                                                      <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                                      <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                                      <br>
                                                   </div>
                                                   <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                                                   <div class="row">
                                                      <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                                                      <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                                      <div class="col-9">
                                                         <select class="list-dt" id="month" name="expmonth">
                                                            <option selected>Month</option>
                                                            <option>January</option>
                                                            <option>February</option>
                                                            <option>March</option>
                                                            <option>April</option>
                                                            <option>May</option>
                                                            <option>June</option>
                                                            <option>July</option>
                                                            <option>August</option>
                                                            <option>September</option>
                                                            <option>October</option>
                                                            <option>November</option>
                                                            <option>December</option>
                                                         </select>
                                                         <select class="list-dt" id="year" name="expyear">
                                                            <option selected>Year</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                             </fieldset>
                                             <fieldset>
                                                <div class="form-card">
                                                   <h2 class="fs-title text-center">Success !</h2>
                                                   <br><br>
                                                   <div class="row justify-content-center">
                                                      <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                                   </div>
                                                   <br><br>
                                                   <div class="row justify-content-center">
                                                      <div class="col-7 text-center">
                                                         <h5>You Have Successfully Signed Up</h5>
                                                      </div>
                                                   </div>
                                                </div>
                                             </fieldset>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="Favorites" class="w3-container city" style="display: none;">
                        <div class="tabcontent-title-section">
                           <h2 class="tabcontent-title">Favorites</h2>
                        </div>
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>Preview</th>
                                    <th>Product</th>
                                    <th>Date of Booking</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <!--  <th>Action</th> -->
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="shop-cart-item">
                                    <td class="gauto-cart-preview">
                                       <a>
                                       <img src="{{ URL::asset('theme/front/img/cart-1.png') }}" alt="cart-1">
                                       </a>
                                    </td>
                                    <td class="gauto-cart-product">
                                       <a>
                                          <p>car disk break</p>
                                       </a>
                                    </td>
                                    <td class="gauto-cart-quantity">
                                       <date>15-10-2021</date>
                                    </td>
                                    <td class="gauto-cart-price">
                                       <p>$180</p>
                                    </td>
                                    <td class="gauto-cart-total">
                                       <p>$180</p>
                                    </td>
                                    <!-- <td class="gauto-cart-close">
                                       <a href="#"><i class="fa fa-times"></i></a>
                                       </td> -->
                                 </tr>
                                 <!--  <tr class="shop-cart-item">
                                    <td class="gauto-cart-preview">
                                       <a>
                                       <img src="{{ URL::asset('theme/front/img/cart-2.jpg') }}" alt="cart-1">
                                       </a>
                                    </td>
                                    <td class="gauto-cart-product">
                                       <a>
                                          <p>shock absorber</p>
                                       </a>
                                    </td>
                                    <td class="gauto-cart-quantity">
                                       <date>1-05-1925</date>
                                    </td>
                                    <td class="gauto-cart-price">
                                       <p>$90</p>
                                    </td>
                                     
                                    <td class="gauto-cart-total">
                                       <p>$90</p>
                                    </td>
                                     <td class="gauto-cart-close">
                                       <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                    </tr> -->
                              </tbody>
                           </table>
                           <div class="more-booking-btn">
                              <a href="#" class="gauto-btn">more booking</a>
                           </div>
                        </div>
                     </div>
                     <div id="paymentSettings" class="w3-container city" style="display: none;">
                        <div class="tabcontent-title-section">
                           <h2 class="tabcontent-title">payment Settings</h2>
                        </div>
                     </div>
                     <div id="Logout" class="w3-container city" style="display: none;">
                        <div class="tabcontent-title-section">
                           <h2 class="tabcontent-title">Logout</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection