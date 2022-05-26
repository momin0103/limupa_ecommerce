@extends('master.front.master')

@section('body')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h1 class="page-title text-center"><u>Complete Order</u></h1>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="{{route('show-cart')}}">Complete Order</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row text-center text-success">
                <h3>Welcome {{Session::get('customer_name')}}, Your order place successfully. Please wail..we will contact with you as soon as posible. </h3>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
    <!-- Begin Footer Area -->
@endsection
