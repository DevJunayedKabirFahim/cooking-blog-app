@extends('backend.master')
@section('title', 'Add Category Page')

@section('body')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>
                </div>
                <div class="card-body">
                    <div class="bg-success"><p class="text-center text-white">{{session('message')}}</p></div>
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-2">Category Name</label>
                            <div class="col-md-7">
                                <input id="name" type="text" name="name" class="form-control" placeholder="Write category name"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-2">Category Description</label>
                            <div class="col-md-7">
                                <textarea name="description" id="description" class="form-control" placeholder="Write category description"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-2">Category Image</label>
                            <div class="col-md-7">
                                <input id="image" type="file" name="image" class="form-control"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-2">Publication Status</label>
                            <div class="col-md-7">
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="status" value="1" checked>
                                        <label class="custom-control-label" for="customControlValidation2">Published</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="status" value="0">
                                        <label class="custom-control-label" for="customControlValidation3">Unpublished</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-2"></label>
                            <div class="col-md-7">
                                <input type="submit" class="btn btn-primary rounded-2" value="Create New Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
