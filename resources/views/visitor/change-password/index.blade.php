@extends('frontend.master')

@section('title', 'Change Password Page')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{route('my-dashboard')}}">My Dashboard</a></li>
                        <li class="list-group-item"><a href="{{route('my-profile')}}">My Profile</a></li>
                        <li class="list-group-item"><a href="{{route('my-comment')}}">My Comment</a></li>
                        <li class="list-group-item"><a href="{{route('change-password')}}">Change Password</a></li>
                        <li class="list-group-item"><a href="{{route('user-logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <h1>Change Password</h1>
                </div>
            </div>
        </div>
    </section>

@endsection
