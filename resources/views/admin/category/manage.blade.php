@extends('master.admin.master')

@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-dark text-center text-bold">Manage Category Form</h3>
                        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                    </div>
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Category Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($categories as $category)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td><img src="{{$category->image}}" alt="" height="50" width="80"></td>
                                    <td>{{$category->status}}</td>
                                    <td>
                                        <a href="{{route('edit-category', ['id' => $category->id])}}" class="btn btn-success btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" onclick="deleteCategory({{$category->id}})" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                         <form action="{{route('delete-category', ['id' => $category->id])}}" method="POST" id="deleteCategoryForm{{$category->id}}">
                                             @csrf
                                         </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteCategory(id) {
            event.preventDefault();
            var check = confirm('Are you sure to delete this.....');
            if(check)
            {
                document.getElementById('deleteCategoryForm'+id).submit();
            }
        }
    </script>
@endsection
