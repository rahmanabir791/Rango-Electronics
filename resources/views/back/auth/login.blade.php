<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rango Electronic | Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('/')}}back-assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('/')}}back-assets/https://fonts.googleapis.com">
    <link rel="preconnect" href="{{asset('/')}}back-assets/https://fonts.gstatic.com" crossorigin>
    <link href="{{asset('/')}}back-assets/https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{asset('/')}}back-assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('/')}}back-assets/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/')}}back-assets/{{asset('/')}}back-assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('/')}}back-assets/{{asset('/')}}back-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/')}}back-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('/')}}back-assets/css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative d-flex p-0">
    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-5">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="{{route('front.home')}}" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Rango Electronic</h3>
                        </a>
                        <h3>Sign In</h3>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password" />
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <a href="{{asset('/')}}back-assets/">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                    </form>
                    <p class="text-center mb-0">Don't have an Account? <a href="{{route('register')}}">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>

<!-- JavaScript Libraries -->
<script src="{{asset('/')}}back-assets/https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{asset('/')}}back-assets/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/chart/chart.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/easing/easing.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/tempusdominus/js/moment.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="{{asset('/')}}back-assets/js/main.js"></script>
</body>

</html>
