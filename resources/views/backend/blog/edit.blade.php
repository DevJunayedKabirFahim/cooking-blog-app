@extends('backend.master')
@section('title', 'Edit Blog Page')

@section('body')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Blog</h3>
                </div>
                <div class="card-body">
                    <div class="bg-success"><p class="text-center text-white">{{session('message')}}</p></div>
                    <form action="{{route('blog.update', ['id' => $blog->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-2">Category Name</label>
                            <div class="col-md-7">
                                <select class="form-control" name="category_id" >
                                    <option disabled selected>---select any option---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$blog->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-2">Blog Title</label>
                            <div class="col-md-7">
                                <input id="title" type="text" name="title" class="form-control" value="{{$blog->title}}" placeholder="Write blog title"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-2">Blog Description</label>
                            <div class="col-md-7">
                                <textarea name="description" id="description" class="summernote" placeholder="Write Blog description">{{$blog->description}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-2">Blog Image</label>
                            <div class="col-md-7">
                                <input id="image" type="file" name="image" class="form-control"/>
                                <img src="{{asset($blog->image)}}" alt="" class="mt-3" height="100" width="120"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-2">Publication Status</label>
                            <div class="col-md-7">
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="status" value="1" {{$blog->status == 1 ?'checked' : ''}}>
                                        <label class="custom-control-label" for="customControlValidation2">Published</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="status" value="0" {{$blog->status == 0 ?'checked' : ''}}>
                                        <label class="custom-control-label" for="customControlValidation3">Unpublished</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-2"></label>
                            <div class="col-md-7">
                                <input type="submit" class="btn btn-primary rounded-2" value="Update Existing Blog">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
