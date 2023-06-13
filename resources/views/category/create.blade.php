@extends('layouts.admin')


@section('content')

    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Category Information
                            {{-- <a href="{{ route('category.index') }}" class="btn btn-primary float-end">Back</a> --}}
                        </h3>
                    </div>
                    <div class="card-body">

                            <div class="form-group row mb-3">
                                <label for="name" class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="{{('Name')}}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="banner" class="col-md-3 col-form-label">Banner</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="banner" id="banner">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="icon" class="col-md-3 col-form-label">Icon</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="icon" id="icon" >
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="meta_title" class="col-md-3 col-form-label">Meta Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="{{ ('Meta Title') }}">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="name" class="col-md-3 col-form-label">Meta Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="meta_description" id="meta_description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary float-end">Save</button>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
