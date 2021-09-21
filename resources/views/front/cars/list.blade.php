                  <div class="car-listing-right" id="JEEP">
                     <div class="property-page-heading">
                        <div class="propertu-page-head">
                           <ul>
                              <li class="active"><a href="#"><i class="fa fa-th-list"></i></a></li>
                              <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                           </ul>
                        </div>
                        <div class="paging_status">
                           <p>1-10 of 25 results</p>
                        </div>
                        <div class="propertu-page-shortby">
                           <label><i class="fa fa-sort-amount-asc"></i>Sort By</label>
                           <select class="chosen-select-no-single">
                              <option>Default</option>
                              <option>Price (Low to High)</option>
                              <option>Price (High to Low)</option>
                              <option>Featured</option>
                           </select>
                        </div>
                     </div>
                     <div class="car-grid-list">
                        
                        <div class="row">
                           @foreach($vehicle->chunk(3) as $car)
                           @foreach($car as $car_data)
                           <div class="col-md-4">
                              <div class="single-offers">
                                 <div class="offer-image">
                                    <a href="#">
                                    <img src="{{ URL::asset('theme/front/img/nissan-offer.png') }}" alt="offer 1" />
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
                                       <a href="car-booking.html" class="offer-btn-1">Rent Car</a>
                                       <!-- <a href="#" class="offer-btn-2">Details</a> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                           @endforeach
                        </div>
                       
                     </div>
                   
                        <?php
                        $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
                        ?>

                        @if ($vehicle->lastPage() > 1)
                            <div id="" class="pagination-box-row" style="">
                                <ul class="pagination">
                                   
                                    @for ($i = 1; $i <= $vehicle->lastPage(); $i++)
                                        <?php
                                            $half_total_links = floor($link_limit / 2);
                                            $from = $vehicle->currentPage() - $half_total_links;
                                            $to = $vehicle->currentPage() + $half_total_links;
                                            if ($vehicle->currentPage() < $half_total_links) {
                                                $to += $half_total_links - $vehicle->currentPage();
                                            }
                                            if ($vehicle->lastPage() - $vehicle->currentPage() < $half_total_links) {
                                                $from -= $half_total_links - ($vehicle->lastPage() - $vehicle->currentPage()) - 1;
                                            }
                                        ?>
                                        @if ($from < $i && $i < $to)
                                            <li class=" {{ ($vehicle->currentPage() == $i) ? ' active' : '' }}">
                                                <a class="" href="{{ $vehicle->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endif
                                    @endfor
                                </ul>
                            </div>
                        @endif
                     </div>

                  </div>
