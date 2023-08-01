@extends('front.master')
@section('title')
    services - Rango Electronics
@endsection
@section('body')
    @include('front.pages.home.sideBar')
    <!-- Page Content -->
    <div class="container my-5">
        <h1 class="text-center">Our Services</h1>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="service-1.jpg" class="card-img-top" alt="Electronics Repair">
                    <div class="card-body">
                        <h5 class="card-title">Electronics Repair</h5>
                        <p class="card-text">We offer expert electronics repair services for a wide range of devices and brands. Our team of skilled technicians can fix various issues, ensuring your devices work like new.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="service-2.jpg" class="card-img-top" alt="Product Installation">
                    <div class="card-body">
                        <h5 class="card-title">Product Installation</h5>
                        <p class="card-text">Our experienced team can handle the installation of various electronic products, including home appliances, entertainment systems, and smart devices.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="service-3.jpg" class="card-img-top" alt="Technical Support">
                    <div class="card-body">
                        <h5 class="card-title">Technical Support</h5>
                        <p class="card-text">Get 24/7 technical support for all your electronic devices. Our dedicated support team is always ready to assist you with any issues or queries you may have.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="service-4.jpg" class="card-img-top" alt="Product Upgrades">
                    <div class="card-body">
                        <h5 class="card-title">Product Upgrades</h5>
                        <p class="card-text">We offer product upgrade services to enhance the performance and features of your existing electronic devices. Stay up-to-date with the latest technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

