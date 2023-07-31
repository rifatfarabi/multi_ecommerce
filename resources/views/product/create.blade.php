@extends('layouts.admin')


@section('content')

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Product Information</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row mb-3">
                                <label for="product_name" class="col-md-3 col-form-label">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="product_name" id="product_name" placeholder="{{ ('Product Name') }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="category_id" class="col-md-3 col-form-label">Category</label>
                                <div class="col-md-9">
                                    <select class="form-select form-select-sm" name="category_id" id="category_id" aria-label=".form-select-sm example">
                                        @foreach ($categories as $category)
                                           <option value="{{ $category->id}}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="brand_id" class="col-md-3 col-form-label">Brand</label>
                                <div class="col-md-9">
                                    <select class="form-select form-select-sm" name="brand_id" id="brand_id" aria-label=".form-select-sm example">
                                        @foreach ($brands as $brand)
                                           <option value="{{ $brand->id}}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="unit" class="col-md-3 col-form-label">Unit</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="unit" id="unit" placeholder="{{ ('Unit') }}">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="minimum_purchase_qty" class="col-md-3 col-form-label">Minimum Purchase Qty</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="minimum_purchase_qty" id="minimum_purchase_qty" placeholder="{{ ('Minimum Purchase Qty') }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="unit_price" class="col-md-3 col-form-label">Unit Price</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="unit_price" id="unit_price" placeholder="{{ ('Unit Price') }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="discount" class="col-md-3 col-form-label">Discount</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="discount" id="discount" placeholder="{{ ('Discount') }}">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="quantity" class="col-md-3 col-form-label">Quantity</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="quantity" id="quantity" placeholder="{{ ('Quantity') }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="thumbnail_image" class="col-md-3 col-form-label">Thumbnail Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="thumbnail_image" id="thumbnail_image">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="description" class="col-md-3 col-form-label">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="refundable" class="col-md-3 col-form-label">Refundable</label>
                                <div class="col-md-9">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        {{-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary float-end">Save</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
