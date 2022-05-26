@extends('master.admin.master')

@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-dark text-center text-bold">Edit Product Form</h3>
                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
            </div>
            <div class="card-body card-block">

                <form action="{{route('update-product', ['id' => $product->id])}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Category Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="form-control"  required name="category_id" onchange="getSubCategory(this.value)">
                                <option value="" disabled selected>---Select Your Category Name---</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ' '}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Sub Category Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="form-control" name="sub_category_id" id="subCategoryId">
                                <option value="">---Select Your Sub Category Name---</option>
                                @foreach($sub_categories as $sub_category)
                                    <option value="{{$sub_category->id}}" {{$sub_category->id == $product->sub_category_id ? 'selected' : ' '}}>{{$sub_category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Brand Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="form-control" name="brand_id">
                                <option>---Select Your Brand Name---</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : ' '}}>{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Unit Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="form-control" name="unit_id">
                                <option>---Select Your Unit Name---</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}" {{$unit->id == $product->unit_id ? 'selected' : ' '}}>{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Product Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="hf-email" name="name" value="{{$product->name}}" placeholder="Enter product name..." class="form-control">
                            <span class="help-block">Please enter your product Name</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Product Code</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="hf-email" name="code" value="{{$product->code}}" placeholder="Enter product code..." class="form-control">
                            <span class="help-block">Please enter your product code</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Regular Price</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="hf-email" name="regular_price"  value="{{$product->regular_price}}" placeholder="Enter regular price..." class="form-control">
                            <span class="help-block">Please enter your regular price</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Selling Price</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="hf-email" name="selling_price" value="{{$product->selling_price}}" placeholder="Enter selling price..." class="form-control">
                            <span class="help-block">Please enter your selling price</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Short Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea type="text" id="hf-email" name="short_description" placeholder="Enter product short description..." class="form-control">{{$product->short_description}}</textarea>
                            <span class="help-block">Please enter your short description</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class="form-control-label">Long Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea type="text" id="hf-email" name="long_description" placeholder="Enter product long description..." class="form-control summernote">{{$product->long_description}}</textarea>
                            <span class="help-block">Please enter your long description</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Product Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="hf-password" name="image"  class="form-control-file" accept="image/*">
                            <img src="{{asset($product->image)}}" alt="" width="80" height="50">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Product Sub Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="hf-password" name="sub_image[]"  class="form-control-file" multiple accept="image/*">
                            @foreach($sub_images as $sub_image)
                            <img src="{{asset($sub_image->image)}}" alt="" width="80" height="50">
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-group-sm btn btn-block"><i class="fa fa-dot-circle-o"></i>Update Product Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
