@extends('master.admin.master')

@section('body')
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-dark text-center text-bold">Add Sub Category Form</h3>
                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
            </div>
            <div class="card-body card-block">

                <form action="{{route('new-sub-category')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Category Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="form-control" name="category_id">
                                <option>---Select Your Category---</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Sub Category Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="hf-email" name="name" placeholder="Enter sub category name..." class="form-control">
                            <span class="help-block">Please enter your sub category Name</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Sub Category Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea type="text" id="hf-email" name="description" placeholder="Enter sub category description..." class="form-control"></textarea>
                            <span class="help-block">Please enter your description</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Sub Category Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="hf-password" name="image"  class="form-control-file" accept="image/*">
                            <span class="help-block">Please choice your sub category image</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-group-sm btn btn-block"><i class="fa fa-dot-circle-o"></i>Create New Sub Category</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
