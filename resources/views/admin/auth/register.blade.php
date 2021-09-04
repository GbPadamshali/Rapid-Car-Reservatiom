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
                                <h4 class="text-center mb-4">Register</h4>
                                <form action="/register" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label><strong>Username</strong></label>
                                        <input type="text" class="form-control" placeholder="username" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Phone</strong></label>
                                        <input type="text" class="form-control" placeholder="1234567890" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password" class="form-control" value="Password" name="password">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                                    </div>

                                </form>
                                <div class="new-account mt-3">
                                    <p>Already have an account? <a class="text-primary" href="{{url('/login')}}">Sign in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection