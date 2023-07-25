@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">All Order
                    <a href="{{ route('category.create') }}" class="btn btn-primary float-end">Add New Category</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Order Code</th>
                        <th scope="col">Num. of Products</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Area</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Delivery Status</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Order Time</th>
                        <th scope="col">Refund</th>
                        <th scope="col">Option</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $key => $order)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $order->order_code}}</td>
                            <td>{{ $order->num_of_products}}</td>
                            <td>{{ $order->customer}}</td>
                            <td>{{ $order->area}}</td>
                            <td>{{ $order->amount}}</td>
                            <td>{{ $order->delivery_status}}</td>
                            <td>{{ $order->payment_status}}</td>
                            <td>{{ $order->order_time}}</td>
                            <td>{{ $order->refund}}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary btn-icon btn-circle btn-sm mx-2" href="{{ route('order.edit', $order->id )}}" title="{{ ('Edit') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div>
                                        <form action="{{ route('order.destroy', $order->id)}}" method="POST" enctype="multipart/form-data">
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
                  {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
