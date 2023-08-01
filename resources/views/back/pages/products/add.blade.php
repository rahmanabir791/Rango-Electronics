@extends('back.master')

@section('title')
    ADD Product
@endsection

@section('body')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h4 class="text-center text-white">Add Product</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control bg-light text-dark" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Category</label>
                                <div class="col-md-8">
                                    <select class="form-select bg-light text-dark" name="category" aria-label="Default select example" required>
                                        <option selected disabled>Open this select Product Category</option>
                                        @foreach($allCategorys as $allCategory)
                                            <option value="{{$allCategory->newCategory}}">{{$allCategory->newCategory}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Brand</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand" class="form-control bg-light text-dark" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Price</label>
                                <div class="col-md-8">
                                    <input type="text" name="price" class="form-control bg-light text-dark" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Short Description</label>
                                <div class="col-md-8 ">
                                    <input type="text" name="shortDetails" class="form-control bg-light text-dark" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control bg-light text-dark" cols="30" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control bg-light text-dark" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8 ">
                                    <label for=""><input type="radio" name="status" value="1" checked> Published</label>
                                    <br>
                                    <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success form-control" value="Add Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <!-- Add any additional CSS styles here -->
@endsection

@section('scripts')
    <!-- Add any additional JavaScript scripts here -->
@endsection
