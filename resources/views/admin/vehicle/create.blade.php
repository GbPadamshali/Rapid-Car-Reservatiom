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
                        <h4 class="card-title">Create Vehicle</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form role="form" action="{{ route('admin.vehicles.store') }}"  id="store_user" name="store_user" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="@if(!empty($vehicle)){{ $vehicle->id }}@endif">
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
                                        <label>Car</label>
                                        <select class="form-control" name="car_id" id="car_id" style="width: 100%;    margin-bottom: 0px;" required>
                                            <option value="">Select Car</option>
                                            @if(!empty($cars))
                                            @foreach($cars as $car)
                                            <option value="{{ $car->id }}"  @if(!empty($vehicle) && $vehicle->car_id == $car->id) selected @endif>{{ $car->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>

                                     <div class="form-group col-md-6">
                                        <label>Company</label>
                                        <select class="form-control" name="company_id" id="company_id" style="width: 100%;    margin-bottom: 0px;" required="">
                                            <option value="">Select Company</option>
                                            @if(!empty($companies))
                                            @foreach($companies as $company)
                                            <option value="{{ $company->id }}"  @if(!empty($vehicle) && $vehicle->company_id == $company->id) selected @endif>{{ $company->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Bank</label>
                                        <select class="form-control" name="bank_id" id="bank_id" style="width: 100%;    margin-bottom: 0px;" required="">
                                            <option value="">Select Bank</option>
                                            @if(!empty($banks))
                                            @foreach($banks as $bank)
                                            <option value="{{ $bank->id }}"  @if(!empty($vehicle) && $vehicle->bank_id == $bank->id) selected @endif>{{ $bank->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" value="@if(!empty($vehicle)){{ $vehicle->title }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Cost</label>
                                        <input type="text" class="form-control" name="cost" id="cost" placeholder="Enter Cost" value="@if(!empty($vehicle)){{ $vehicle->cost }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Vin number</label>
                                        <input type="text" class="form-control" name="vin_number" id="vin_number" placeholder="Enter Vin number" value="@if(!empty($vehicle)){{ $vehicle->vin_number }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Licence plate number</label>
                                        <input type="text" class="form-control" name="licence_plate_number" id="licence_plate_number" placeholder="Enter Licence plate number" value="@if(!empty($vehicle)){{ $vehicle->licence_plate_number }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Register due date</label>
                                        <input type="date" class="form-control" name="reg_due_date" id="reg_due_date" placeholder="Enter Register due date" value="@if(!empty($vehicle)){{ $vehicle->reg_due_date }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Date of purchase</label>
                                        <input type="date" class="form-control" name="date_of_purchase" id="date_of_purchase" placeholder="Enter Date of purchase" value="@if(!empty($vehicle)){{ $vehicle->date_of_purchase }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Registration city</label>
                                        <input type="text" class="form-control" name="registration_city" id="registration_city" placeholder="Enter Registration city" value="@if(!empty($vehicle)){{ $vehicle->registration_city }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City sticker expiry</label>
                                        <input type="date" class="form-control" name="city_sticker_expiry" id="city_sticker_expiry" placeholder="Enter City sticker expiry" value="@if(!empty($vehicle)){{ $vehicle->city_sticker_expiry }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Insurance company</label>
                                        <input type="text" class="form-control" name="insurance_company" id="insurance_company" placeholder="Enter Insurance company" value="@if(!empty($vehicle)){{ $vehicle->insurance_company }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Insurance policy number</label>
                                        <input type="text" class="form-control" name="insurance_policy_number" id="insurance_policy_number" placeholder="Enter Insurance policy number" value="@if(!empty($vehicle)){{ $vehicle->insurance_policy_number }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Insurance till date</label>
                                        <input type="date" class="form-control" name="insurance_till_date" id="insurance_till_date" placeholder="Enter Insurance till date" value="@if(!empty($vehicle)){{ $vehicle->insurance_till_date }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Inspection till date</label>
                                        <input type="date" class="form-control" name="inspection_till_date" id="inspection_till_date" placeholder="Enter Inspection till date" value="@if(!empty($vehicle)){{ $vehicle->inspection_till_date }}@endif" required="">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6" style="margin-top:30px;float: right;">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
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
        
            },
            messages: {

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection