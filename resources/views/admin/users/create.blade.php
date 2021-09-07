@extends('admin.theme.master')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create User</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form role="form" action="{{ route('admin.users.store') }}" id="store_user" name="store_user" method="post">
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
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                                        <span id="name_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('name') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
                                        <span id="phone_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('phone') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                                        <span id="email_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('email') }}</strong></small>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                                        <span id="password_err" style="color: red; font-weight:700;">
                                            <small class="text-danger"><strong>{{ $errors->first('password') }}</strong></small>
                                        </span>
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

@section('page_js')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        alert(123);
        $('#store_user').validate({
            rules: {
                name: 'required',
                phone: {
                    number: true,
                    minlength: 10
                },
                email: {
                    required: true,
                    pattern: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                },
                password: {
                    minlength: 6,
                    pattern: /^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X]).*$/
                },
            },
            messages: {
                name: {
                    required: "Please enter name",
                },
                phone: {
                    required: "Please enter name",
                    minlength: "The phone number minimum atleast 10 digit",
                },
                email: {
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                },
                password: {
                    required: "Please enter password",
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection