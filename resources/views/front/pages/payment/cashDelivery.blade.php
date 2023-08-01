@extends('front.master')

@section('title')
    Cash Payment
@endsection

@section('body')
    <div class="container">
        <div class="card">
            <div class="card-header text-center bg-primary text-white">
                <h1>Cash on Delivery</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('cash-pay-submit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-6 col-form-label">Your Total Amount:</label>
                        <div class="col-md-6">
                            <input type="number" name="price" class="form-control" value="{{ Cart::getTotal() / $price ? Cart::getTotal() : "$price"}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-6 col-form-label">Your Name:</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-6 col-form-label">Your Email:</label>
                        <div class="col-md-6">
                            <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-6 col-form-label">Your Phone Number:</label>
                        <div class="col-md-6">
                            <input type="number" name="phone" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-6 col-form-label">Your Address:</label>
                        <div class="col-md-6">
                            <textarea name="address"  class="form-control" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-outline-warning form-control" value="submit Payment" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
