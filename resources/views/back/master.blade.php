@include('back.includes.style')

<body>
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

@include('back.includes.sidebar')


    <!-- Content Start -->
    <div class="content">


        @include('back.includes.manu')


        @yield('body')

@include('back.includes.footer')
    </div>
    <!-- Content End -->


@include('back.includes.js')
