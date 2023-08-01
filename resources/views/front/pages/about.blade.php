@extends('front.master')
@section('title')
    services - Rango Electronics
@endsection
@section('body')
    @include('front.pages.home.sideBar')
    <!-- Page Content -->
    <div class="container my-5">
        <h1 class="text-center">About Rango Electronics</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <img src="about.jpg" alt="About Rango Electronics" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3>Welcome to Rango Electronics</h3>
                <p>Rango Electronics is a trusted name in the electronics industry, offering a wide range of high-quality electronic products to meet your needs. We strive to provide the latest and most innovative gadgets and devices at competitive prices.</p>
                <p>Owned and managed by Md. Kamruzzaman, Rango Electronics has been serving customers with dedication and commitment since its establishment. Our goal is to make technology accessible to everyone and enhance your everyday life with cutting-edge electronics.</p>
                <p>At Rango Electronics, we take pride in our exceptional customer service and product expertise. Our team of knowledgeable professionals is always ready to assist you in finding the perfect electronic product that suits your requirements.</p>
            </div>
        </div>
    </div>

    <!-- Address Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2>Visit Our Store</h2>
                    <p>Address: House: 5, Road: 12, DIT project, Merul Badda, Dhaka.</p>
                    <p>Phone: +01778-149097</p>
                    <p>Email: info@rangoelectronics.com</p>
                </div>
            </div>
        </div>
    </section>
@endsection

