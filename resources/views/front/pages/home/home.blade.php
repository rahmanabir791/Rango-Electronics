@extends('front.master')
@section('title')
    Home
@endsection

@section('body')
    <!-- header area start -->
    @include('front.pages.home.sideBar')
    <!-- main menu area end -->
    </header>
    <!-- header area end -->

    @include('front.pages.home.slider')

    <!-- latest product start -->
    <div class="latest-product mt-5" style="background-color: #800000;">
        <div class="container">
            <div class="section-title mb-30">
                <div class="title-icon">
                    <i class="fa fa-flash"></i>
                </div>
                <h3>Latest Products</h3>
            </div> <!-- section title end -->
            <!-- featured category start -->
            <div class="latest-product-active slick-padding slick-arrow-style">
                <!-- product single item start -->
                @foreach($products as $product)
                    <div class="product-item fix">
                        <div class="product-thumb">
                            <a href="{{ route('product-details', ['id' => $product->id]) }}">
                                <img src="{{ asset($product->image) }}" class="img-pri" alt="{{ $product->name }}" style="height: 150px; width: 200px;">
                            </a>
                            <div class="product-label">
                                <span>Hot</span>
                            </div>
                            <div class="product-action-link">
                                <a href="{{ route('product-details', ['id' => $product->id]) }}" data-toggle="tooltip" data-placement="left" title="Details"><i class="fa-solid fa-circle-info" style="color: #810000;"></i></a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ asset($product->image) }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button data-toggle="tooltip"><span class="fa-solid fa-cart-plus"></span></button>
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
                @endforeach
                <!-- product single item end -->
            </div>
            <!-- featured category end -->
        </div>
    </div>
    <!-- latest product end -->

    @foreach($categorys as $category)
        <!-- latest product start -->
        <div class="latest-product mt-5" style="background-color: #800000;">
            <div class="container">
                <div class="section-title mb-30">
                    <div class="title-icon">
                        <i class="fa fa-flash"></i>
                    </div>
                    <h3>{{ $category->newCategory }}</h3>
                </div> <!-- section title end -->
                <!-- featured category start -->
                <div class="latest-product-active slick-padding slick-arrow-style">
                    <!-- product single item start -->
                    @foreach($products as $product)
                        @if($category->newCategory == $product->category)
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset($product->image) }}" class="img-pri" alt="{{ $product->name }}" style="height: 150px; width: 200px;">
                                    </a>
                                    <div class="product-label">
                                        <span>Hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa-solid fa-circle-info" style="color: #810000;"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart" style="color: #810000;"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4 class="-"><a class="text-decoration-none" href="product-details.html">{{ $product->name }}</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">৳ {{ $product->price }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- product single item end -->
                </div>
                <!-- featured category end -->
            </div>
        </div>
        <!-- latest product end -->
    @endforeach
@endsection
