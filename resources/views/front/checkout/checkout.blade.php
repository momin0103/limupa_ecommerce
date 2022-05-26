@extends('master.front.master');

@section('body')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="{{route('checkout')}}">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="checkout-area pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="{{route('new-order')}}" method="POST">
                        @csrf
                        <div class="checkbox-form">
                            <h3 class="text-center">Billing Details</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Full Name <span class="required">*</span></label>
                                        @if($customer)
                                        <input placeholder="Enter Your Name" value="{{$customer->name}}" readonly type="text" name="name">
                                        @else
                                            <input placeholder="Enter Your Name"  required type="text" name="name">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        @if($customer)
                                        <input placeholder="Enter Your Mail" value="{{$customer->email}}" readonly type="email" name="email">
                                        @else
                                        <input placeholder="Enter Your Mail"  required type="email" name="email">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone  <span class="required">*</span></label>
                                        @if($customer)
                                        <input type="number" name="mobile"  value="{{$customer->mobile}}" readonly placeholder="Enter Your Phone">
                                        @else
                                        <input type="number" name="mobile" required placeholder="Enter Your Phone">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Delivery Address <span class="required">*</span></label>
                                        <textarea placeholder="Delivery address" type="text" name="delivery_address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="">
                                        <label><input type="radio" value="1" name="payment_method"> Cash On Delivery</label>
                                        <label><input type="radio" value="2" name="payment_method"> Online Payment</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                        <button type="submit" class="btn btn-success">Place Order/Confirm Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3 class="text-center">Your order Summary</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="cart-product-name border mark">Product</th>
                                    <th class="cart-product-total border mark">Total</th>
                                </tr>
                                </thead>
                                @php($sum = 0)
                                @foreach($items as $item)
                                    <tbody>
                                        <tr>
                                            <th class="cart-product-name border p-2 text-left">{{$item->name}}: ({{$item->quantity}} * {{$item->price}}) </th>
                                            <th class="cart-product-total border p-2 text-left">TK.  {{number_format($item->quantity * $item->price)}}</th>
                                        </tr>
                                    </tbody>
                                    @php($sum = $sum + ($item->quantity * $item->price))
                                @endforeach
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="cart-product-name border p-2 text-left">Cart Sub Total:<strong class="product-quantity"></strong></td>
                                        <td class="cart-product-total border p-2 text-left"><span class="amount">Tk. {{number_format($sum)}}</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name border p-2 text-left">Tax Amount<strong class="product-quantity"></strong></td>
                                        <td class="cart-product-total border p-2 text-left"><span class="amount">Tk. {{$tax = (round($sum*15)/100)}}</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name border p-2 text-left">Shipping Cost<strong class="product-quantity"></strong></td>
                                        <td class="cart-product-total border p-2 text-left"><span class="amount">TK. {{$shipping = 50}}</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr class="order-total p-2">
                                    <th class="text-left p-2">Order Total</th>
                                    <td><strong><span class="amount p-2">Tk. {{number_format($sum+$tax+$shipping)}}</span></strong></td>

                                    @php(Session::put('order_total', ($sum+$tax+$shipping)))
                                    @php(Session::put('tax_total', $tax))
                                    @php(Session::put('shipping_cost', $shipping))

                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="order-button-payment">
                                    <input value="Place order" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
