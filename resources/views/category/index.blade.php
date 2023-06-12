@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Category
                    <a href="{{ route('category.create') }}" class="btn btn-primary float-end">Add New Category</a>
                </h3>
            </div>
        </div>
    </div>
</div>

@endsection
