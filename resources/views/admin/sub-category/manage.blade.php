@extends('master.admin.master')

@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-dark text-center text-bold">Manage Sub Category Form</h3>
                        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                    </div>
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Sub Category Description</th>
                                    <th>Sub Category Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($subCategories as $subCategory)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{isset($subCategory->category->name) ? $subCategory->category->name : ' ' }}</td>
                                    <td>{{$subCategory->name}}</td>
                                    <td>{{$subCategory->description}}</td>
                                    <td><img src="{{$subCategory->image}}" alt="" height="50" width="80"></td>
                                    <td>{{$subCategory->status}}</td>
                                    <td>
                                        <a href="{{route('edit-sub-category', ['id' => $subCategory->id])}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('delete-sub-category', ['id' => $subCategory->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete this....');"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
