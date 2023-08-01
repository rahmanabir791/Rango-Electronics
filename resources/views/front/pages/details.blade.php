@extends('front.master')

@section('title')
    Details Products
@endsection

@section('body')
    @include('front.pages.home.sideBar')
    <div class="mt-5" style="background-color: #800000; padding: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset($product->image) }}" alt="" class="img_inner" style="height: 300px; width: 300px">
                </div>
                <div class="col-md-4">
                    <h2 class="text-white">Short Description</h2>
                    <div class="text1 text-white">{{$product->shortDetails}}</div>
                    <h2 class="text-white">Name: {{$product->name}}</h2>
                    <div class="text1 text-white">Price: {{$product->price}}</div><br>
                </div>
                <div class="col-md-4">
                    <h2 class="text-white">Details about this product</h2>
                    <div class="text1 text-white">{{$product->description}}</div>
                </div>

                <div class="container">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{route('payment', ['id' => $product->id])}}">
                                <button class="btn btn-outline-success" type="button" style="height: 50px; width: 200px; color: red">
                                    <b>Buy Now</b>
                                </button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ asset($product->image)}}" name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="btn btn-outline-success" type="submit" style="height: 50px; width: 200px; color: red">
                                    <b>Add To Cart</b>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <br>
@endsection
