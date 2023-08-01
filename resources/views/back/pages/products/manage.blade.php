@extends('back.master')
@section('title')
    Manage Product
@endsection
@section('body')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark border-3">
                    <div class="card-header">
                        <h4 class="text-center text-white">All Products</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-white">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Price</th>
                                    <th>Short Description</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category}}</td>
                                        <td>{{ $product->brand}}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->shortDetails }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>
                                            <img src="{{ asset($product->image) }}" alt="" style="height: 80px; width: 80px">
                                        </td>
                                        <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('edit-product', ['id' => $product->id]) }}" class="btn btn-sm btn-secondary btn-outline-info">Edit</a>
                                            <br><br>
                                            <a href="{{ route('delete-product', ['id' => $product->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
