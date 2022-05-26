@extends('master.admin.master')

@section('body')
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-dark text-center text-bold">Edit Brand Form</h3>
                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
            </div>
            <div class="card-body card-block">

                <form action="{{route('update-unit', ['id' => $unit->id])}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Unit Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="hf-email" name="name" value="{{$unit->name}}" placeholder="Enter unit name..." class="form-control">
                            <span class="help-block">Please enter your unit Name</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Unit Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea type="text" id="hf-email" name="description" placeholder="Enter unit description..." class="form-control">{{$unit->description}}</textarea>
                            <span class="help-block">Please enter your description</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-group-sm btn btn-block"><i class="fa fa-dot-circle-o"></i>Update New Unit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
