@extends('admin.Layout.master')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Products </h3>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add New product</a>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product List</h4>
                    @if (session()->has('message'))
                        <p>{{ session()->get('message') }}</p>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <td>No. </td>
                                <td>Photo </td>
                                <th>Name</th>

                                <th>Price</th>
                                <th>Status</th>
                                <th>Is_favouriate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/photo/' . $product->photo) }}" alt="">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ number_format($product->prize, 2) }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td>{{ $product->is_favourite }}</td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="{{ route('admin.products.edit', encrypt($product->id)) }}">Edit</a>
                                    <td><a class="btn btn-danger btn-sm"
                                            href="{{ route('admin.products.delete', encrypt($product->id)) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $products->links() }}
                </div>
            </div>
        </div>


    </div>
@endsection
