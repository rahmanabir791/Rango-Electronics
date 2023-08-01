@extends('back.master')

@section('title')
    Edit Product
@endsection

@section('body')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h4 class="text-center text-white">Edit Product</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('update-product', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control bg-light text-dark" value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Category Name</label>
                                <div class="col-md-8">
                                    <select class="form-select bg-light text-dark" name="category" aria-label="Default select example">
                                        <option disabled>Open this select Product Category</option>
                                        @foreach($allCategorys as $allCategory)
                                            <option value="{{$allCategory->newCategory}}" {{ $product->category == $allCategory->newCategory ? 'selected' : '' }}>{{$allCategory->newCategory}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Brand</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand" class="form-control bg-light text-dark" value="{{ $product->brand }}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Price</label>
                                <div class="col-md-8">
                                    <input type="text" name="price" class="form-control bg-light text-dark" value="{{ $product->price }}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Short Description</label>
                                <div class="col-md-8">
                                    <input type="text" name="shortDetails" class="form-control bg-light text-dark" value="{{ $product->shortDetails }}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Full Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control bg-light text-dark" cols="30" rows="5">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control bg-light text-dark">
                                    <img src="{{ asset($product->image) }}" alt="" style="height: 100px; width: 100px">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="1" {{ $product->status == 1 ? 'checked' : '' }}> Published</label>
                                    <br>
                                    <label for=""><input type="radio" name="status" value="0" {{ $product->status == 0 ? 'checked' : '' }}> Unpublished</label>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success form-control" value="Update Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
