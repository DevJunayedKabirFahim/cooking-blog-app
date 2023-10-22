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
                            <h5 class="mb-0">Manage All Comments</h5>
                        </div>
                        <p class="card-subtitle mb-3">
                            Here displayed all Visitor Comments.
                        </p>

                        <div class="table-responsive">
                            <p class="text-center text-success">{{session('message')}}</p>
                            <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                <thead>
                                <!-- start row -->
                                <tr>
                                    <th>Serial No</th>
                                    <th>Blog Title</th>
                                    <th>Visitor Name</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <!-- end row -->
                                </thead>
                                <tbody>
                                <!-- start row -->
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$comment->blog->title}}</td>
                                        <td>{{$comment->visitor->name}}</td>
                                        <td>{{$comment->comment}}</td>
                                        <td>{{$comment->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('comment.update-status', ['id' => $comment->id])}}" class="btn {{$comment->status == 1 ? 'btn-success' : 'btn-warning'}} btn-sm me-2"><i class="ti ti-check"></i></a>
                                            <a href="" onclick="return confirm('Are you sure to delete this right now?')" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
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
