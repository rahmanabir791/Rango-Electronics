@extends('front.master')
@section('title')
    Cart
@endsection
@section('body')
    @include('front.pages.home.sideBar')
    <section class="mt-3" style="background-color: #800000; padding: 20px;">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-3xl font-bold text-center text-black">Carts</h1>
                    </div>
                    <div class="card-body">
                        <table class="w-full table table-bordered text-sm lg:text-base" cellspacing="0">
                            <thead class="table-bordered">
                            <tr class="h-12 uppercase">
                                <th class="hidden md:table-cell"></th>
                                <th class="text-left text-black">Name</th>
                                <th class="pl-5 text-left lg:text-right lg:pl-0 text-black">
                                    <span class="lg:hidden" title="Quantity">Qtd</span>
                                    <span class="hidden lg:inline">Quantity</span>
                                </th>
                                <th class="hidden text-right md:table-cell text-black">Price</th>
                                <th class="hidden text-right md:table-cell text-black">Remove</th>
                            </tr>
                            </thead>
                            <tbody class="">
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td class="hidden pb-4 md:table-cell">
                                        <a href="#">
                                            <img src="{{ $item->attributes->image }}" class="rounded" alt="Thumbnail" style="height: 100px; width: 100px">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <p class="mb-2 md:ml-4 text-purple-600 font-bold text-black">{{ $item->name }}</p>
                                        </a>
                                    </td>
                                    <td class="justify-center mt-6 md:justify-end md:flex">
                                        <div class="h-10 w-28">
                                            <div class="relative flex flex-row w-full h-8">
                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}" >
                                                    <input type="text" name="quantity" value="{{ $item->quantity }}"
                                                           class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                                    <button class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden text-right md:table-cell text-black">
                                        <span class="text-sm font-medium lg:text-base">
                                            ${{ $item->price }}
                                        </span>
                                    </td>
                                    <td class="hidden text-right md:table-cell text-black">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button class="px-4 py-2 text-danger bg-red-900 btn btn-outline-warning shadow rounded-full">x</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12 text-black">
                            Total: ${{ Cart::getTotal() }}
                        </div>
                        <div class="col-md-12">
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="px-6 py-2 text-sm rounded shadow text-red-100 bg-red-500">Clear Carts</button>
                            </form>
                        </div>
                        <div class="col-md-6 mt-4">
                            <form action="{{ route('confirm.payment') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ Cart::getTotal() }}" name="price">
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="" style="font-size: 20px;">
                                            <input class="" type="radio" name="status" value="0" checked>
                                            Cash on Delivery
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" style="font-size: 20px;">
                                            <input type="radio" name="status" value="1">Payment Online
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="">
                                            <button type="submit" style="height: 50px; width: 200px; background-color: #0f5132; color: red">
                                                Buy this Product Now <b class="fa fa-shopping-bag"></b>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
