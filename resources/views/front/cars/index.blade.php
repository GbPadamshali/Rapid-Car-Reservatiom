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
      <!-- Breadcromb Area Start -->
      <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Car Listing</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>car listing</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Car Listing Area Start -->
      <section class="gauto-car-listing section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="car-list-left">
                     <div class="sidebar-widget">
                        <form>
                           
                           <p>
                              <input id="reservation_date" name="reservation_date" placeholder="Journey Date" data-select="datepicker" type="text">
                           </p>
                           <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                              <input type="text" class="form-control" placeholder="Journey Time" />
                           </p>
                           <p>
                              <button type="submit" class="gauto-theme-btn">Find Car</button>
                           </p>
                        </form>
                     </div>
                     <div class="sidebar-widget">
                        <ul class="service-menu nav-tabs" id="tabs" data-tabs="tabs">
                           <li class="active">
                              <a data-toggle="tab" href="#all">All Brands<span>({{ $all_count }})</span></a>
                           </li>
                           @foreach($vehicle_counts as $vehicle)
                           <li class="">
                              <a data-toggle="tab" href="#{{ $vehicle['company']['name']}}" class="get_car_data" data-id = "{{ $vehicle['company']['id'] }}">{{ $vehicle['company']['name']}}<span>({{ $vehicle['count'] }})</span></a>
                           </li>
                           @endforeach

                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 list_data" class="my-tab-content" id="my-tab-content">


               </div>
            </div>
         </div>
      </section>
      <!-- Car Listing Area End -->
       
@endsection

 @section('js')
    <script src="./theme/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./theme/js/plugins-init/datatables.init.js"></script>
     <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
      /******************** remove-user  created by : vikas katariya********************/

      get_load_data();
      function get_load_data(id){
         $.ajax({
            url: '{{ url("user/get_car_data") }}',
            type: 'POST',
            data : {id:id},
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            beforeSend: function () {

                $(".list_data").html("<img src='{{ URL::asset('theme/images/cars/Spinner.gif') }}' alt='offer 1'/>");

            },
            success: function (data) {
               console.log(data)
                if (data.status == 400) {
                    toastr.options =
                        {
                            "closeButton" : true,
                            "progressBar" : true
                        }
                    toastr.error(data.msg);
                   
                }
                if (data.status == 200) {
                     $(window).scrollTop(500);
                     $(".list_data").html();
                     $(".list_data").html(data.result);
                }
            },
            error: function () {
                toastr.options =
                        {
                            "closeButton" : true,
                            "progressBar" : true
                        }
                toastr.error("Something went wrong.");
                window.location.reload();
            }
         });
      }

      $("body").on("click",".get_car_data",function(){
         var id = $(this).data('id');
         get_load_data(id)
      });

      $('body').on('click', '.pagination a', function(e) {
           e.preventDefault();
           var url = $(this).attr('href');
           $.ajax({
             url : url,
             type: "post",
             headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
             },
             beforeSend: function() {

             },
             success:function(data){
                $('.list_data').html(data.result);
             },
           });
      });
    </script>
    @endsection