@extends('frontend.master')
@section('title', 'User Register')

@section('body')
    <div class="page-header bg_image" style="background-image: url({{asset('/')}}frontend/images/bg/bg-2.jpg);">
        <div class="page-header-content">
            <div class="container">
                <h2 class="heading">Register</h2>
            </div>
        </div>
    </div>

    <div class="main_wrapper">
        <!-- Login Form  -->
        <div class="login-page section" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h3 class="login-title">Create Your Account</h3>
                        <form action="{{route('user-register')}}" class="login-form" method="post">
                            @csrf
                            <div class="form-container">
                                <div class="form-group">
                                    <label for="name">User Name *</label>
                                    <input type="text" name="name" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Email Address *</label>
                                    <input type="email" name="email" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input type="password" name="password" class="form-control" placeholder="" required>
                                </div>
                                <div class="button_group mb-2">
                                    <input class="btn dark" type="submit" value="Signup" name="Log In">
                                </div>
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="checkbox" value="" id="savemail">
                                    <label class="form-check-label" for="savemail">
                                        Send me update information
                                    </label>
                                </div>
                                <div class="btn_group mt-3">
                                    <a href="#" class="btn rounded-2 text-capitalize">Signup with Google</a>
                                    <a href="#" class="btn rounded-2 bg-three text-capitalize">Signup with Facebook</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
