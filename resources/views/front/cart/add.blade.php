@extends('master.front.master')

@section('body')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="{{route('show-cart')}}">Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-success text-center">{{Session::get('message')}}</p>
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="li-product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="li-product-price">Unit Price</th>
                                    <th class="li-product-quantity">Quantity</th>
                                    <th class="li-product-subtotal">Subtotal</th>
                                    <th class="li-product-remove">Remove</th>
                                </tr>
                                </thead>
                                @php($sum = 0)
                                @foreach($items as $item)
                                <tbody>
                                <tr>
                                    <td class="li-product-thumbnail"><a href="#"><img src="{{asset($item->attributes->image)}}" alt="Li's Product Image" height="50" width="80"></a></td>
                                    <td class="li-product-name"><a href="#">{{$item->name}}</a></td>
                                    <td class="li-product-price"><span class="amount">{{$item->price}}</span></td>
                                    <form action="{{route('update-cart-product', ['id' => $item->id])}}" method="post">
                                        @csrf
                                        <td class="quantity">
                                                <div>
                                                <input class="cart-plus-minus form-control" value="{{$item->quantity}}" type="number" name="qty" min="1">
                                                <button class="btn btn-outline-success" type="submit" >Update</button>
                                            </div>
                                        </td>
                                    </form>
                                    <td class="product-subtotal"><span class="amount">{{$item->price * $item->quantity}}</span></td>
                                    <td class="li-product-remove"><a href={{route('delete-card-item', ['id' => $item->id])}}><i class="fa fa-times" onclick="confirm('Are you sure delete this...')"></i></a></td>
                                </tr>
                                </tbody>
                                    @php($sum = $sum+($item->price * $item->quantity))
                                @endforeach
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                    </div>
{{--                                    <div class="coupon2">--}}
{{--                                        <input class="button" name="update_cart" value="Update cart" type="submit">--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart Details</h2>
                                    <ul>
                                        <li>Cart Subtotal <span>TK. {{number_format($sum)}}</span></li>
                                        <li>Tax Amount <span>TK. {{$tax = (round(($sum*15)/100))}}</span></li>
                                        <li>Shipping Cost <span>TK. {{$shipping= 50}}</span></li>
                                        <li>Total Payble <span>TK. {{number_format($sum+$tax+$shipping)}}</span></li>
                                    </ul>
                                    <div class="cart-page-total text-center">
                                    <a href="{{route('checkout')}}">Proceed to checkout</a>
                                    <a href="{{route('home')}}">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
    <!-- Begin Footer Area -->
@endsection
