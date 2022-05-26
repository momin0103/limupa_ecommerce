@extends('master.admin.master')

@section('body')
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-dark text-center text-bold">Edit Category Form</h3>
                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
            </div>
            <div class="card-body card-block">

                <form action="{{route('update-category', ['id' => $category->id])}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Category Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="hf-email" name="name" value="{{$category->name}}" placeholder="Enter category name..." class="form-control">
                            <span class="help-block">Please enter your category Name</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Category Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea type="text" id="hf-email" name="description" placeholder="Enter category description..." class="form-control">{{$category->description}}</textarea>
                            <span class="help-block">Please enter your description</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Category Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="hf-password" name="image"  class="form-control-file" accept="image/*">
                            <img src="{{asset($category->image)}}" alt="" height="50" width="80">
                            <span class="help-block">Please choice your category image</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-group-sm btn btn-block"><i class="fa fa-dot-circle-o"></i>Update New Category</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
