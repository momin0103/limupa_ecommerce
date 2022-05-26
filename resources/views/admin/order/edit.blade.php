@extends('master.admin.master')

@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="text-white text-center text-bold">Order Billing Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Customer Name</th>
                                <td>{{$order->customer->name}}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <td>{{$order->customer->mobile}}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{$order->customer->email}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     <form action="{{route('admin-update-order', ['id' => $order->id])}}" method="POST">
         @csrf
         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-header bg-secondary">
                         <h3 class="text-white text-center text-bold">Order Basic Info</h3>
                     </div>
                     <div class="card-body">
                         <table class="table table-bordered table-hover">
                             <tr>
                                 <th>Order Id</th>
                                 <td>{{$order->id}}</td>
                             </tr>
                             <tr>
                                 <th>Order Total</th>
                                 <td>{{$order->order_total}}</td>
                             </tr>
                             <tr>
                                 <th>Order Devlivery Address </th>
                                 <td><textarea name="delivery_address" class="form-control">{{$order->delivery_address}}</textarea></td>
                             </tr>
                             <tr>
                                 <th>Order Status</th>
                                 <td>
                                     <select class="form-control" name="order_status">
                                         <option value="Pending">Pending</option>
                                         <option value="Processing">Processing</option>
                                         <option value="Complete">Complete</option>
                                         <option value="Cancel">Cancel</option>
                                     </select>
                                 </td>
                             </tr>
                             <tr>
                                 <th>Payment Status</th>
                                 <td>
                                     <select class="form-control" name="payment_status">
                                         <option value="Pending">Pending</option>
                                         <option value="Processing">Processing</option>
                                         <option value="Complete">Complete</option>
                                         <option value="Cancel">Cancel</option>
                                     </select>
                                 </td>
                             </tr>
                         </table>
                         <div class="form-group mt-4 text-right">
                             <input type="submit" class="btn btn-success" value="Update Order Status">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </form>
    </div>
@endsection
