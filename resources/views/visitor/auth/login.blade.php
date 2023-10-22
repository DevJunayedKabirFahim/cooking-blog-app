@extends('frontend.master')
@section('title', 'Login')

@section('body')
    <div class="page-header bg_image" style="background-image: url({{asset('/')}}frontend/images/bg/bg-2.jpg);">
        <div class="page-header-content">
            <div class="container">
                <h2 class="heading">Login</h2>
            </div>
        </div>
    </div>
    <div class="main_wrapper">
        <!-- Login Form  -->
        <div class="login-page section" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
                        <h3 class="login-title">#Login</h3>
                        <p class="text-center text-danger">{{session('message')}}</p>
                        <form action="{{route('user-login')}}" class="login-form" method="post">
                            @csrf
                            <div class="form-container">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="text" name="email" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input type="password" name="password" class="form-control" placeholder="" required>
                                </div>
                                <div class="btn-group mb-2">
                                    <input class="btn dark" type="submit" value="Log In" name="Log In">
                                </div>
                                <div class="form-check d-inline-block w-100">
                                    <input class="form-check-input" type="checkbox" value="" id="savemail">
                                    <label class="form-check-label" for="savemail">
                                        Remember Me
                                    </label>
                                </div>
                                <div class="lost_password">
                                    <a href="#">Lost Your Password?</a>
                                    <a href="{{route('user-register')}}" class="ms-3">Create New Account</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
