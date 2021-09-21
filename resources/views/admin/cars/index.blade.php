@extends('admin.theme.master')
@section('content')
<style type="text/css">
    .pagination .disabled {
     padding: 0rem 0rem;
    color: #cacaca;
    cursor: not-allowed;
}
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (session('success'))
                    <div class="alert alert-success">
                        <button class="close" data-close="alert"></button>
                        <strong>{{ session('success') }}</strong>
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger">
                        <button class="close" data-close="alert"></button>
                        <strong>{{ session('error') }}</strong>
                    </div>
                    @endif
                    <div class="card-header">
                        <h4 class="card-title">Cars</h4>
                        <div class="card-toolbar">
                            <a href="{{route('admin.cars.create')}}" class="btn btn-primary mr-2">
                                <i nz-icon nzType=" plus"></i>
                                Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Owner</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Year built</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cars as $car)
                                <tr>
                                    <td>{{$car->name}}</td>
                                    <td>{{$car->user->first_name}}</td>
                                    <td>{{$car->make}}</td>
                                    <td>{{$car->model}}</td>
                                    <td>{{  $car->year }}</td>
                                    <td>
                                     @if ($car->status == 'active') 
                                        <button type="button" class="btn btn-xs btn-success changestatus" data-status="inactive" data-id="{{$car->id}}">
                                            {{ ucfirst($car->status) }} </button>
                                    @endif
                                    @if ($car->status == 'inactive') 
                                        <button type="button" class="btn btn-xs btn-danger changestatus"  data-status="active"  data-id="{{ $car->id }} ">{{ ucfirst($car->status) }}</button>
                                    @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.cars.destroy',$car->id) }}" 
                                            method="POST">   
                                            <a class="btn btn-info"  title="view" href="{{ route('admin.cars.show',$car->id) }}">Show</a>    
                                            <a class="btn btn-primary" title="edit" href="{{ route('admin.cars.edit',$car->id) }}">Edit</a>   
                                            <a class="btn btn-danger remove-user" data-id="{{ $car->id }}"> Delete</a>
                                        </form>
                                    </td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <?php
                        $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
                        ?>

                        @if ($cars->lastPage() > 1)
                            <div id="news_paginate" class="dataTables_paginate paging_simple_numbers" style="float:right;">
                                <ul class="pagination">
                                    <li id="news_previous" class="paginate_button page-item previous {{ ($cars->currentPage() == 1) ? ' disabled' : '' }}">
                                        <a class="page-link" tabindex="0" href="{{ $cars->url(1) }}">Previous</a>
                                    </li>
                                    @for ($i = 1; $i <= $cars->lastPage(); $i++)
                                        <?php
                                            $half_total_links = floor($link_limit / 2);
                                            $from = $cars->currentPage() - $half_total_links;
                                            $to = $cars->currentPage() + $half_total_links;
                                            if ($cars->currentPage() < $half_total_links) {
                                                $to += $half_total_links - $cars->currentPage();
                                            }
                                            if ($cars->lastPage() - $cars->currentPage() < $half_total_links) {
                                                $from -= $half_total_links - ($cars->lastPage() - $cars->currentPage()) - 1;
                                            }
                                        ?>
                                        @if ($from < $i && $i < $to)
                                            <li class="paginate_button page-item {{ ($cars->currentPage() == $i) ? ' active' : '' }}">
                                                <a class="page-link" href="{{ $cars->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endif
                                    @endfor
                                    <li id="news_next" class="paginate_button page-item {{ ($cars->currentPage() == $cars->lastPage()) ? ' disabled' : '' }}">
                                        @if($cars->currentPage() == $cars->lastPage())
                                            <a class="page-link" tabindex="0" href="{{ $cars->url($cars->currentPage()) }}" >End</a>
                                        @else
                                            <a class="page-link" tabindex="0" href="{{ $cars->url($cars->currentPage()+1) }}" >Next</a>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('js')
    <script src="./theme/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./theme/js/plugins-init/datatables.init.js"></script>
    <script type="text/javascript">

        /******************** remove-user  created by : vikas katariya (09-09-2021)********************/

        $("body").on("click",".remove-user",function(){
           
            var current_object = $(this);
            var id = current_object.data('id');
            swal({
                title: "Are you sure?",
                text: "Are you sure want to delete this data !",
                type: "error",
                showCancelButton: true,
                dangerMode: true,
                cancelButtonClass: '#DD6B55',
                confirmButtonColor: '#dc3545',
                confirmButtonText: 'Delete!',
            },function (result) {
                if (result) {
                    $.ajax({
                        url: '{{ url("admin/cars/delete") }}/' + id,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        beforeSend: function () {

                        },
                        success: function (data) {
                            if (data.status == 400) {
                                toastr.options =
                                    {
                                        "closeButton" : true,
                                        "progressBar" : true
                                    }
                                toastr.error(data.msg);
                                window.location.reload();
                            }
                            if (data.status == 200) {
                                toastr.options =
                                    {
                                        "closeButton" : true,
                                        "progressBar" : true
                                    }
                                toastr.success(data.msg);
                                window.location.reload();
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
            });
        });

        /******************** changestatus  created by : vikas katariya (09-09-2021)********************/

        $("body").on("click",".changestatus",function(){
           
            var id = $(this).data('id');
            var status = $(this).data('status');


            swal({
                title: "Are you sure?",
                text: "Are you sure want to change this status !",
                type: "error",
                showCancelButton: true,
                dangerMode: true,
                cancelButtonClass: '#DD6B55',
                confirmButtonColor: '#dc3545',
                confirmButtonText: 'Confirm!',
            },function (result) {
                if (result) {
                    $.ajax({
                        url: '{{ route("admin.cars.changestatus") }}',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {id: id, status: status},
                        beforeSend: function () {

                        },
                        success: function (data) {
                            if (data.status == 400) {
                                toastr.options =
                                    {
                                        "closeButton" : true,
                                        "progressBar" : true
                                    }
                                toastr.error(data.msg);
                                //window.location.reload();
                            }
                            if (data.status == 200) {
                                toastr.options =
                                    {
                                        "closeButton" : true,
                                        "progressBar" : true
                                    }
                                toastr.success(data.msg);
                                window.location.reload();
                            }
                        },
                        error: function () {
                            toastr.options =
                                    {
                                        "closeButton" : true,
                                        "progressBar" : true
                                    }
                            toastr.error("Something went wrong.");
                           // window.location.reload();
                        }
                    });
                   
                }
            });
        });
    </script>
    @endsection