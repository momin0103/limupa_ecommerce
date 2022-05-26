@extends('master.admin.master')

@section('body')
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-dark text-center text-bold">Add Brand Form</h3>
                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
            </div>
            <div class="card-body card-block">

                <form action="{{route('new-brand')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Brand Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="hf-email" name="name" placeholder="Enter Brand name..." class="form-control">
                            <span class="help-block">Please enter your Brand Name</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Brand Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea type="text" id="hf-email" name="description" placeholder="Enter Brand description..." class="form-control"></textarea>
                            <span class="help-block">Please enter your description</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Brand Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="hf-password" name="image"  class="form-control-file" accept="image/*">
                            <span class="help-block">Please choice your Brand image</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-group-sm btn btn-block"><i class="fa fa-dot-circle-o"></i>Create New Brand</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
