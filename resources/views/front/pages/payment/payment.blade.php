@extends('front.master')

@section('title')
    Details
@endsection

@section('body')

    <!--==============================Content=================================-->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset($product->image) }}" alt="" class="img_inner" style="height: 300px; width: 300px">
            </div>
            <div class="col-md-8">
                <h2 class="mb-3">Name: {{ $product->name }}</h2>
                <div class="mb-3 text-muted">Price: ${{ $product->price }}</div>
                <h2 class="mb-3">Short Description</h2>
                <p class="mb-4">{{ $product->shortDetails }}</p>
                <form action="{{ route('confirm.payment') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <div class="mb-4">
                        <label class="font-size-20">
                            <input type="radio" name="status" value="0" checked> Cash on Delivery
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="font-size-20">
                            <input type="radio" name="status" value="1"> Payment Online
                        </label>
                    </div>
                    <button type="submit" class="btn-buy-now btn-success">Buy this Product Now <i class="fa fa-shopping-bag"></i></button>
                    <br>
                    <br>

                </form>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #fdfdfd;
            color: #050000;
        }

        .img_inner {
            display: block;
            margin: 0 auto;
        }

        .font-size-20 {
            font-size: 20px;
        }

        .btn-buy-now {
            height: 50px;
            width: 200px;
            background-color: #0f5132;
            color: red;
            border: none;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .btn-buy-now:hover {
            background-color: #0c4027;
        }
    </style>
@endsection
