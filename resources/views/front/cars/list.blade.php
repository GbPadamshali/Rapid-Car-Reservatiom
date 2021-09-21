                  <div class="car-listing-right" id="JEEP">
                     <div class="property-page-heading">
                        <div class="propertu-page-head">
                           <ul>
                              <li class="active"><a href="#"><i class="fa fa-th-list"></i></a></li>
                              <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                           </ul>
                        </div>
                        <div class="paging_status">
                           <p>{{ $vehicle->firstItem() }}-{{ $vehicle->lastItem() }} of {{  $vehicle->total() }} results</p>
                        </div>
                        <div class="propertu-page-shortby">
                           <label><i class="fa fa-sort-amount-asc"></i>Sort By</label>
                           <select class="chosen-select-no-single change_price">
                              <?php $data = Session::get('price_sort'); ?>
                              <option value="">Default</option>
                              <option value="asc" @if(isset($data)) @if($data == 'asc') selected="" @endif @endif>Price (Low to High)</option>
                              <option value="desc" @if(isset($data)) @if($data == 'desc') selected="" @endif @endif>Price (High to Low)</option>
                              <!-- <option value=""  @if(isset($data)) @if($data == 'asc') selected="" @endif @endif>Featured</option> -->
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
                                    @php $image = url('theme/images/cars/'.$car_data->car->image_test->image); @endphp
                                    <img src="{{ $image }}" alt="offer 1" />
                                    </a>
                                 </div>
                                 <div class="offer-text">
                                    <a href="#">
                                       <h3>{{ ucfirst($car_data->car->name) }} {{ucfirst($car_data->car->model)}}</h3>
                                    </a>
                                    <h4>${{$car_data->cost}}<span>/ Day</span></h4>
                                    <ul>
                                       <li><i class="fa fa-car"></i>Model:{{$car_data->car->year}}</li>
                                       <li><i class="fa fa-cogs"></i>{{ $car_data->car->body }}</li>
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
                                 <li class="{{($vehicle->currentPage() == 1) ? 'disabled':''}}">
                                      <a class="" tabindex="-1" href="{{ $vehicle->url($vehicle->currentPage()-1) }}">
                                         <span aria-hidden="true">«</span>
                                      </a>
                                  </li>
                                   
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
                                    @if ( $vehicle->currentPage() < ($vehicle->lastPage() - 4) )
                                     <li class="page-item">
                                         <p style="" class="" >...</p>
                                     </li>
                                    @endif

                                    <li class="{{($vehicle->currentPage()==$vehicle->lastPage())?'disabled':''}}">
                                       <a class="" href="{{$vehicle->url($vehicle->lastPage())}}">
                                           Last
                                       </a>
                                    </li>
                                    @if($vehicle->currentPage() != $vehicle->lastPage())
                                         <li class="{{ ($vehicle->currentPage() == $vehicle->lastPage()) ? ' disabled' : '' }}">
                                             <a href="{{ $vehicle->url($vehicle->currentPage()+1) }}" class="" aria-label="Next">
                                                 <span aria-hidden="true">»</span>
                                                 <span class="sr-only">{{ __('message.Next')}}</span>
                                             </a>
                                         </li>
                                     @endif

                                </ul>
                            </div>
                        @endif
                     </div>

                  </div>
