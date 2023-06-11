@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>
                    <a href="{{ route('category.index') }}" class="btn btn-primary">Create Category</a>
                </h3>
            </div>
        </div>
    </div>
</div>

@endsection
