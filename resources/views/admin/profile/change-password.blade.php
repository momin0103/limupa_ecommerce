@extends('master.admin.master')

@section('body')
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-dark text-center text-bold">Password Change Form</h3>
            </div>
            <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
            <div class="card-body card-block">

                <form action="{{route('admin-update-password')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Previous Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="hf-email" name="prev_password" placeholder="Enter Previous Password..." class="form-control">
                            <span class="help-block">Please enter your Previous Password</span>
                            <br/>
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ''}}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">New Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="hf-email" name="password" placeholder="Enter New Password..." class="form-control">
                            <span class="help-block">Please enter your New Password</span>
                            <br/>
                            <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ''}}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Confirm Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="hf-password" name="confirm_password" placeholder="Enter New Password..." class="form-control">
                            <span class="help-block">Please enter your Confirm Password</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-group-sm btn btn-block"><i class="fa fa-dot-circle-o"></i>Update Password Info</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
