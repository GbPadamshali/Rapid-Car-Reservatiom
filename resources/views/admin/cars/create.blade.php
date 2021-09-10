@extends('admin.theme.master')

@section('content')
<style type="text/css">
.quote-imgs-thumbs {
  background: ##eeeeee1f;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  margin: 1.5rem 0;
  padding: 0.75rem;
}
.quote-imgs-thumbs--hidden {
  display: none;
}
.img-preview-thumb {
  background: #fff;
  border: 1px solid #777;
  border-radius: 0.25rem;
  box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
  margin-right: 1rem;
  max-width: 140px;
  padding: 0.25rem;
}
.error{
    color: red;
}
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Car</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form role="form" action="{{ route('admin.cars.store') }}"  id="store_user" name="store_user" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="@if(!empty($car)){{ $car->id }}@endif">
                                @csrf
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
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="@if(!empty($car)){{ $car->name }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Owner</label>
                                            <select class="form-control required" name="owner" style="width: 100%;" required="">
                                                <option value="">Select Owner</option>
                                                <option value="1"@if(!empty($car)) @if($car->owner == "1")selected @endif  @endif >Owner 1</option>
                                                <option value="2"@if(!empty($car)) @if($car->owner == "2")selected @endif @endif>Owner 2</option>
                                                <option value="3" @if(!empty($car)) @if($car->owner == "3")selected @endif @endif>Owner 3</option>
                                            </select>
                                        <span id="phone_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('phone') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Make</label>
                                        <input type="text" class="form-control" name="make" id="make" placeholder="Enter Make" value="@if(!empty($car)){{ $car->make }}@endif">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Model</label>
                                        <input type="text" class="form-control" name="model" id="model" placeholder="Enter Model" value="@if(!empty($car)){{ $car->model }}@endif">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <?php $years = range(1990, strftime("%Y", time())); ?>
                                    <div class="form-group col-md-6">
                                        <label>Year of built</label>
                                        <select name="year_built" id="year_built" class="form-control required" >
                                            <option value="">Select Year</option>
                                            <?php foreach($years as $year) : ?>
                                            <option @if(!empty($car))  @if($car->year_built == $year)selected @endif  @endif value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6" style="margin-top: 23px;">
                                        <label for="upload_imgs" class="button hollow">Select Your Images +</label>
                                        <input class="show-for-sr"  value="@if(!empty($car)){{ $car->image[0]->id ?? ''}}@endif" name="upload_imgs[]" type="file" id="upload_imgs" multiple >
                                    </div>
                                    <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden form-group col-md-12" id="img_preview" aria-live="polite"></div>

                                    <div class="col-md-12">
                                    @if(isset($car->image))  
                                    @if(count($car->image)>0)
                                    @foreach($car->image as $image)
                                    <input type="hidden" name="carimgids[]" class="carimg1{{$image->id}}" value="{{$image->id}}">
                                    <div class="quote-imgs-thumbs form-group col-md-12" id="img_preview" aria-live="polite">
                                    <input type="hidden" name="carimgids[]" class="carimg1{{$image->id}}" value="{{$image->id}}">
                                    <div class="col-md-4 carimgdiv1{{$image->id}}">
                                      <a href="javascript:void(0);" tooltip="Delete school image permanently" flow="left" data-id="{{ $image->id }}" class="badge badge-pill badge-danger  delete_image  deletewrap " data-keyid="1{{$image->id}}"> <i class="fa fa-times" ></i></a>
                                      <div class="avatar-icon rounded mt-2" style="min-width: 240px; min-height: 120px;">
                                        @if(!empty($image->image) && file_exists(public_path('theme/images/cars/thumbnail/'.$image->image)) ) 
                                        <?php 
                                        $image = url('theme/images/cars/thumbnail/'.$image->image); 
                                        ?>
                                        <img src="{{$image}}" class="img-preview-thumb">
                                        @endif
                                    </div> 
                                    @endforeach 
                                    @endif  
                                    @endif 
                                    </div>
                                    </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>

<script type="text/javascript">
      $(document).ready(function() {

        /******************** validate  created by : vikas katariya (09-09-2021)********************/

        $('#store_user').validate({
            ignore: [],


            rules: {
                name: 'required',
                owner: 'required',
                make: 'required',
                model: 'required',
                year_built: 'required',
                'year_built[]': {
                  required: true
                }
            },
            messages: {
                name: {
                    required: "Please enter name",
                },
                owner: {
                    required: "Please enter owner",
                },
                make: {
                    required: "Please enter make",
                },
                model: {
                    required: "Please enter model",
                },
                year_built: {
                    required: "Please enter year",
                },
                upload_imgs: {
                    required: "Please enter images",
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
        var imgUpload = document.getElementById('upload_imgs')
          , imgPreview = document.getElementById('img_preview')
          , imgUploadForm = document.getElementById('img-upload-form')
          , totalFiles
          , previewTitle
          , previewTitleText
          , img;

        imgUpload.addEventListener('change', previewImgs, false);
        imgUploadForm.addEventListener('submit', function (e) {
          e.preventDefault();
          alert('Images Uploaded! (not really, but it would if this was on your website)');
        }, false);

        /******************** previewImgs  created by : vikas katariya (09-09-2021)********************/

        function previewImgs(event) {
          totalFiles = imgUpload.files.length;
          
          if(!!totalFiles) {
            imgPreview.classList.remove('quote-imgs-thumbs--hidden');
            previewTitle = document.createElement('p');
            previewTitle.style.fontWeight = 'bold';
            previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
            previewTitle.appendChild(previewTitleText);
            imgPreview.appendChild(previewTitle);
          }
          
          for(var i = 0; i < totalFiles; i++) {
            img = document.createElement('img');
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add('img-preview-thumb');
            imgPreview.appendChild(img);
          }
        }
        });

      /******************** delete_image  created by : vikas katariya (09-09-2021)********************/
      
        $("body").on("click",".delete_image",function(){
           
            var id = $(this).data('id');
            var keyid = $(this).data('keyid');
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
                    $('.carimgdiv'+keyid).remove();
                    $('.carimg'+keyid).val("");
                    $.ajax({
                        url: '{{ url("admin/cars/deleteimage") }}/' + id,
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
                                //window.location.reload();
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