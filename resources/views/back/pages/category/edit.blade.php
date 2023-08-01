@extends('back.master')

@section('title')
    Edit Category
@endsection

@section('body')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h4 class="text-center text-white">Edit Event</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update-Category',['id' => $editCategorys->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-white">Event Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="newCategory" value="{{$editCategorys->newCategory}}" class="form-control bg-light text-dark" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success">Edit Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
