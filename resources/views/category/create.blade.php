@extends('layouts.admin')


@section('content')
    <form action="{{ route('category.store') }}" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Category Information
                            {{-- <a href="{{ route('category.index') }}" class="btn btn-primary float-end">Back</a> --}}
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="banner">Banner</label>
                                <input type="file" class="form-control" name="banner" id="banner">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="icon">Icon</label>
                                <input type="file" class="form-control" name="icon" id="icon">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" id="meta_title">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea class="form-control" name="meta_description" id="meta_description" rows="3"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
