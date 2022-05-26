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
                    <!-- Login Form s-->
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <form action="{{route('new-customer-login')}}" method="POST" >
                                @csrf
                                <div class="login-form">
                                    <h2 class="login-title">Login Now</h2>
                                    <p class="text-center text-danger">{{Session::get('message')}}</p>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Email Address<span class="text-danger">*</span></label>
                                            <input class="mb-0" type="email" name="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <input class="mb-0" type="password" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="{{route('customer-forget-password')}}">Forget Password</a>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="register-button mt-0" type="submit">Login</button>
                                        </div>
                                        <p>Don't have an account? <a href="{{route('customer-register')}}">Register Here</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
