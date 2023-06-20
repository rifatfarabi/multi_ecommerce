@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">All Category
                    <a href="{{ route('category.create') }}" class="btn btn-primary float-end">Add New Category</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Banner</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Meta Title</th>
                        <th scope="col">Meta Description</th>
                        <th scope="col">Option</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $category->name}}</td>
                            <td>{{ $category->banner}}</td>
                            <td>{{ $category->icon}}</td>
                            <td>{{ $category->meta_title}}</td>
                            <td>{{ $category->meta_description}}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary btn-icon btn-circle btn-sm mx-2" href="{{ route('category.edit', $category->id )}}" title="{{ ('Edit') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div>
                                        <form action="{{ route('category.destroy', $category->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon btn-circle btn-sm">
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
                  {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
