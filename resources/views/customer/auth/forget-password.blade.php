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
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Forget Password</h1>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-danger">{{Session::get('message')}}</p>
                            <form action="{{route('forget-password-mail-send')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Enter Your Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Send Notification To Email">
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
