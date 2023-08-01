@extends('front.master')

@section('title')
    Online Payment
@endsection

@section('body')
    <div class="container">
        <div class="card">
            <div class="card-header text-center bg-primary text-white">
                <h1>Online Payment</h1>
            </div>
            <div class="card-body text-center text-success">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Send Money To This Number</h3>
                    </div>
                    <div class="col-md-6">
                        <h3>018********</h3>
                    </div>
                </div>
            </div>
            <br>
            <form action="{{ route('online-pay-submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <h4>Your Total Amount:</h4>
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="price" class="form-control" value="{{ Cart::getTotal() / $price ? Cart::getTotal() : "$price" }}" readonly>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Transaction Number:
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="tnumber" class="form-control" value="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Your Name:
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Your Email:
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Your Phone Number:
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="phone" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Your Address:
                    </div>
                    <div class="col-md-6">
                        <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-warning form-control" value="submit Payment" >
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
@endsection




