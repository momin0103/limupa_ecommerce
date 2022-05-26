@extends('master.admin.master')

@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-dark text-center text-bold">Manage User Form</h3>
                    </div>
                    <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                    <table class="table table-bordered table-hover">
                        <thead class="text-center">
                        <tr>
                            <th>Sl No</th>
                            <th>User Name</th>
                            <th>Email Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{route('edit-admin-user', ['id' => $user->id])}}" class="btn btn-success btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-admin-user', ['id' => $user->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete this....');">
                                        <i class="fa fa-trash"></i>
                                    </a>
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
