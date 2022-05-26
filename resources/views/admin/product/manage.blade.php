@extends('master.admin.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-dark text-center text-bold">Manage Product Form</h3>
                        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Product Name </th>
                                <th>Product Code</th>
                                <th>Selling Price</th>
                                <th>Product Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($products as $product)
                                <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{isset($product->category->name) ? $product->category->name: ''}}</td>
                                    <td>{{isset($product->subCategory->name) ? $product->subCategory->name : ''}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->code}}</td>
                                    <td>{{$product->selling_price}}</td>
                                    <td><img src="{{$product->image}}" alt="" height="50" width="80"></td>
                                    <td>{{$product->status}}</td>
                                    <td>
                                        <a href="{{route('edit-product', ['id' => $product->id])}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('delete-product', ['id' => $product->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete this....');"><i class="fa fa-trash"></i></a>
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
