@extends('master.admin.master')

@section('body')
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-dark text-center text-bold">Add User Form</h3>
            </div>
            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
            <div class="card-body card-block">

                <form action="{{route('new-admin-user')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">User Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="hf-email" name="name" placeholder="Enter user name..." class="form-control">
                            <span class="help-block">Please enter your user Name</span>
                            <br/>
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ''}}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">User Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="hf-email" name="email" placeholder="Enter user email..." class="form-control">
                            <span class="help-block">Please enter your user email</span>
                            <br/>
                            <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ''}}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="hf-password" name="password" class="form-control">
                            <span class="help-block">Please choice your password</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-group-sm btn btn-block"><i class="fa fa-dot-circle-o"></i>Create New User</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
