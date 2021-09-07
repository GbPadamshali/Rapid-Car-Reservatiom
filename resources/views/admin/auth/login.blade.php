@extends('admin.theme.default')

@section('content')
<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Login</h4>
                                <form role="form" action="{{route('do_login')}}" id="login_form" name="login_form" method="POST">
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

                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="text" class="form-control" value="" id="email" name="email" value="{{ old('email') }}">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password" class="form-control" value="" id="password" name="password">
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="form-check ml-2">
                                                <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="{{route('forgot')}}">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>
                            </div>
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
<script>
    $(document).ready(function() {
        $('#login_form').validate({
            rules: {
                email: {
                    required: true,
                    pattern: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                },
                password: {
                    required: true,
                },
            },
            messages: {
                email: {
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                },
                password: {
                    required: "Please enter password",
                },
            },
            // submitHandler: function(form) {
            //     form.submit();
            // }
        });
    });
</script>