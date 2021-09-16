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
                            <a href="{{route('admin.vehicles.create')}}" class="btn btn-primary mr-2">
                                <i nz-icon nzType=" plus"></i>
                                Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>cost</th>
                                    <th>title</th>
                                    <th>vin_number</th>
                                    <th>licence_plate_number</th>
                                   
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehicles as $vehicle)
                                <tr>
                                    <td>{{$vehicle->cost}}</td>
                                    <td>{{$vehicle->title}}</td>
                                    <td>{{$vehicle->vin_number}}</td>
                                    <td>{{$vehicle->licence_plate_number}}</td>
                                
                                    
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.vehicles.destroy',$vehicle->id) }}" 
                                            method="POST">   
                                            <a class="btn btn-info"  title="view" href="{{ route('admin.vehicles.show',$vehicle->id) }}">Show</a>    
                                            <a class="btn btn-primary" title="edit" href="{{ route('admin.vehicles.edit',$vehicle->id) }}">Edit</a>   
                                            <a class="btn btn-danger remove-user" data-id="{{ $vehicle->id }}"> Delete</a>
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
                        url: '{{ url("admin/vehicles/delete") }}/' + id,
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

    </script>
    @endsection