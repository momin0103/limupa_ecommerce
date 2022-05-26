@extends('master.admin.master')

@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="text-dark text-center text-bold">Manage Order Form</h3>
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                            <tr>
                                <th>Sl No</th>
                                <th>Order No</th>
                                <th>Customer Name</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($orders as $order)
                                <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{ isset($order->customer->name) ? $order->customer->name.' ('.$order->customer->mobile.')' : ''}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>
                                        <a href="{{route('view-order-detail', ['id' => $order->id])}}" class="btn btn-info btn-xs"><i class="fa fa-book" title="View Order Detail"></i></a>

                                        <a href="{{route('view-order-invoice', ['id' => $order->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-list" title="View Order Invoice"></i></a>

                                        <a href="{{route('download-order-invoice', ['id' => $order->id])}}" class="btn btn-warning btn-xs" target="_blank"><i class="fa fa-download" title="Downloard Order Invoice"></i></a>

                                        <a href="{{route('admin-edit-order', ['id' => $order->id])}}" class="btn btn-success btn-xs {{$order->order_status == 'Complete' ? 'disabled' : ''}}"><i class="fa fa-edit" title="Edit Order"></i></a>

                                        <a href="{{route('admin-delete-order', ['id' => $order->id])}}" class="btn btn-danger btn-xs {{$order->order_status == 'Cancel' ? '' : 'disabled'}}" onclick="return confirm('Are you sure delete this....');"><i class="fa fa-trash" title="Delete Order"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
