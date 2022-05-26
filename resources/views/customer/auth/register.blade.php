@extends('master.front.master')

@section('body')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Login Content Area -->
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form method="post" action="{{route('new-customer-register')}}">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Register</h4>
                            <p class="text-danger text-center">{{Session::get('message')}}</p>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>First Name</label>
                                    <input class="mb-0" type="text"  name="name" placeholder="First Name">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Phone Number</label>
                                    <input class="mb-0" type="text" name="mobile" placeholder="Password">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Confirm Password</label>
                                    <input class="mb-0" type="password" name="confirm_password" placeholder="Confirm Password">
                                </div>
                                <div class="col-12">
                                    <button class="register-button mt-0">Register</button>
                                </div>
                                <p>Don't have an account? <a href="{{route('customer-login')}}">Login Here</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
