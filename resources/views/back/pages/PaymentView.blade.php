@extends('back.master')

@section('title')
    Contact View
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card bg-dark border-3">
                    <div class="card-header">
                        <h4 class="text-center">Online Payments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Price</th>
                                    <th>Transaction Number</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($onlinePayments as $onlinePayment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $onlinePayment->name }}</td>
                                        <td>{{ $onlinePayment->email }}</td>
                                        <td>{{ $onlinePayment->price }}</td>
                                        <td>{{ $onlinePayment->tnumber }}</td>
                                        <td>{{ $onlinePayment->phone }}</td>
                                        <td>{{ $onlinePayment->address }}</td>
                                        <td>
                                            <a href="{{ route('delete-payment', ['id' => $onlinePayment->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="card bg-dark border-3">
                    <div class="card-header">
                        <h4 class="text-center">Cash On Delivery Payments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Price</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cashPayments as $cashPayment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cashPayment->name }}</td>
                                        <td>{{ $cashPayment->email }}</td>
                                        <td>{{ $cashPayment->price }}</td>
                                        <td>{{ $cashPayment->phone }}</td>
                                        <td>{{ $cashPayment->address }}</td>
                                        <td>
                                            <a href="{{ route('delete-payment', ['id' => $cashPayment->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

@section('styles')
    <!-- Add any additional CSS styles here -->
@endsection

@section('scripts')
    <!-- Add any additional JavaScript scripts here -->
@endsection
