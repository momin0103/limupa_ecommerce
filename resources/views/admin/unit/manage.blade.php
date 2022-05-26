@extends('master.admin.master')

@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-dark text-center text-bold">Manage Unit Form</h3>
                        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                    </div>
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Unit Name</th>
                                    <th>Unit Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($units as $unit)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$unit->name}}</td>
                                    <td>{{$unit->description}}</td>
                                    <td>{{$unit->status}}</td>
                                    <td>
                                        <a href="{{route('edit-unit', ['id' => $unit->id])}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('delete-unit', ['id' => $unit->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete this....');"><i class="fa fa-trash"></i></a>
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
