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
                                <label for="miximum_purchase_qty" class="col-md-3 col-form-label">Meta Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="miximum_purchase_qty" id="miximum_purchase_qty" placeholder="{{ ('Miximum Purchase Qty') }}">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="refundable" class="col-md-3 col-form-label">Refundable</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="refundable" id="refundable" placeholder="{{ ('Refundable') }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="thumbnail_image" class="col-md-3 col-form-label">Thumbnail Image</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="thumbnail_image" id="thumbnail_image" placeholder="{{ ('Thumbnail Image') }}">
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
                                <label for="banner" class="col-md-3 col-form-label">Banner</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="banner" id="banner">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="description" class="col-md-3 col-form-label">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
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
