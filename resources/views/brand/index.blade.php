@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header">
                    {{-- @if (Session::has('message'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif --}}
                    <h5 class="mb-0 h6">All Brand
                        <a href="{{ route('brand.create') }}" class="btn btn-primary float-end">Add New Brand</a>
                        </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">logo</th>
                                <th scope="col">Meta Title</th>
                                <th scope="col">Meta Description</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $key => $brand)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->logo }}</td>
                                    <td>{{ $brand->meta_title }}</td>
                                    <td>{{ $brand->meta_description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-primary btn-icon btn-circle btn-sm mx-2"
                                                href="{{ route('brand.edit', $brand->id) }}" title="{{ 'Edit' }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <div>
                                                <form action="{{ route('brand.destroy', $brand->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-icon btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $brands->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
