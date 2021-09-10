@extends('admin.theme.master')
@section('content')

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
                                    <td>{{$car->owner}}</td>
                                    <td>{{$car->make}}</td>
                                    <td>{{$car->model}}</td>
                                    <td>{{  $car->year_built }}</td>
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