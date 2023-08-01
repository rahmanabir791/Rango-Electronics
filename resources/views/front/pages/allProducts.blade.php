@extends('front.master')
@section('title')
    @foreach($products as $product)
        @if($product->brand === $productsAll)
            {{$product->brand}}
        @endif
    @endforeach
@endsection

@section('body')
    <!-- header area start -->
    @include('front.pages.home.sideBar')
    <!-- main menu area end -->
    </header>
    <!-- header area end -->

    @include('front.pages.home.slider')

    <div class="container mt-5" style="background-color: #800000;">
        <div class="shop-product-wrap grid row">
            @foreach($products as $product)
                @if($product->brand === $productsAll)
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-3">
                        <!-- product single grid item start -->
                        <div class="product-item fix mb-30">
                            <div class="product-thumb">
                                <a href="{{ route('product-details', ['id' => $product->id]) }}">
                                    <img src="{{asset($product->image)}}" class="img-pri" alt="{{ $product->name }}" style="height: 200px; width: 300px;">
                                </a>
                                <div class="product-label">
                                    <span>Hot</span>
                                </div>
                                <div class="product-action-link">
                                    <a href="{{ route('product-details', ['id' => $product->id]) }}" data-placement="left" title="Details"><i class="fa-solid fa-circle-info" style="color: #810000;"></i></a>
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        <input type="hidden" value="{{ asset($product->image)}}" name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <button data-toggle="tooltip"><span class="fa-solid fa-cart-plus" style="color: #810000;"></span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4 class="-"><a class="text-decoration-none" href="{{ route('product-details', ['id' => $product->id]) }}">{{ $product->name }}</a></h4>
                                <div class="pricebox">
                                    <span class="regular-price">৳ {{ $product->price }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- product single grid item end -->
                    </div> <!-- product single column end -->
                @endif
            @endforeach
        </div>
    </div>
@endsection
