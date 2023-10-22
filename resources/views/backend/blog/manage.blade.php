@extends('backend.master')
@section('title', 'Manage Blogs')
@section('body')

    <section class="datatables">
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-success"><p class="text-center text-white">{{session('message')}}</p></div>
                        <div class="mb-2">
                            <h5 class="mb-0">Manage All Blogs</h5>
                        </div>
                        <p class="card-subtitle mb-3">
                            Here displayed all cooking Blogs.
                        </p>
                        <div class="table-responsive">
                            <table id="zero_config"
                                   class="table border table-striped table-bordered text-nowrap">
                                <thead>
                                <!-- start row -->
                                <tr>
                                    <th>Serial No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <!-- end row -->
                                </thead>
                                <tbody>
                                <!-- start row -->
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->category->name}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}" alt="" width="70" height="50"/>
                                    </td>
                                    <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('blog.edit', ['id' => $blog->id])}}" class="btn btn-success btn-sm me-2"><i class="ti ti-edit"></i></a>
                                        <a href="{{route('blog.delete', ['id' => $blog->id])}}" onclick="return confirm('Are you sure to delete this right now?')" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- end row -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>


@endsection
