@extends('back.master')

@section('title')
    Manage Event
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
                                    <th>Category Name</th>
                                    <th>Created Date/Time</th>
                                    <th>Updated Date/Time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($newCategorys as $newCategory)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $newCategory->newCategory }}</td>
                                        <td>{{ $newCategory->created_at }}</td>
                                        <td>{{ $newCategory->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('edit-categorys', ['id' => $newCategory->id]) }}" class="btn btn-sm btn-secondary btn-outline-info">Edit</a>
                                            <br><br>
                                            <a href="{{ route('delete-categorys', ['id' => $newCategory->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
