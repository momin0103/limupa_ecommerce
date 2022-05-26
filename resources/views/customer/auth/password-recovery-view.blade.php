@extends('master.front.master')

@section('body')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumb-content">
                        <h1 class="page-title text-center text-success"><u>My Dashboard</u></h1>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Login Content Area -->
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item">My Profile</a>
                            <a href="{{route('customer-change-password')}}" class="list-group-item">Change Password</a>
                            <a href="" class="list-group-item">All Order</a>
                            <a href="" class="list-group-item">Cancel Order</a>
                            <a href="" class="list-group-item">All Wishlist</a>
                            <a href="" class="list-group-item">My Payement History</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Change Password</h1>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-danger">{{Session::get('message')}}</p>
                            <form action="{{route('forget-password-update')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Your Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="code">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Your New Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Change Password">
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
