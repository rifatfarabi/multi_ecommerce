@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">All Product
                    <a href="{{ route('product.create') }}" class="btn btn-primary float-end">Add New product</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Added By</th>
                        <th scope="col">Total Stock</th>
                        <th scope="col">Option</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $product->name}}</td>
                            {{-- <td>
                                <img  style="height: 40px;width: 38px;" src="{{ asset('uploads/categories/'.$product->banner) }}" alt="banner" class="img-size-50 mr-3 img-circle">
                            </td> --}}
                            <td>{{ $product->auth()->user()}}</td>
                            <td>{{ $product->meta_description}}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary btn-icon btn-circle btn-sm mx-2" href="{{ route('product.edit', $product->id )}}" title="{{ ('Edit') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div>
                                        <form action="{{ route('product.destroy', $product->id)}}" method="POST" enctype="multipart/form-data">
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
                  {{ $products->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
