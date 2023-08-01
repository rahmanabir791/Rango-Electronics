<body>
<div class="m-2">
    <div class="">
        <nav class="navbar navbar-expand-sm" style="background-color: #800000;">
            <div class="container-fluid">
                <a href="{{route('front.home')}}" class="navbar-brand">
                    <img src="{{asset('/')}}front-assets/img/logo/rongo.png" alt="brand logo" style="width: 100px; height: 70px;">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse fload-end" id="navbarCollapse">

                    <div class="navbar-nav ms-auto">
                        @if(Auth::check())
                            <a href="#" class="nav-item nav-link">{{Auth::user()->name}}</a>
                            <a href="" class="nav-item nav-link" onclick="event.preventDefault();document.getElementById('logoutabir').submit();">Log Out</a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutabir">@csrf</form>
                        @else
                            <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                            <a href="{{route('register')}}" class="nav-item nav-link">Register</a>
                        @endif
                        <a class="nav-item nav-link" href="{{ route('cart.list') }}" >
                            <span class="fa fa-shopping-cart" style="color: #0b0b0b"></span>
                            <span>{{ Cart::getTotalQuantity()}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<a href="index.html"></a>
</body>



<style>
    /* Add this CSS to your styles.css file */
    body {
        margin: 0;
        padding: 0;
    }

    .navbar {
        padding: 10px;
    }

    .navbar-brand {
        margin-right: 15px;
    }

    .navbar-toggler {
        background-color: #fff;
        border: none;
    }

    .navbar-toggler-icon {
        color: #800000;
    }

    .navbar-collapse {
        justify-content: flex-end;
    }

    .nav-item {
        margin-left: 10px;
    }

    .nav-link {
        color: #fff;
        font-size: 16px;
        text-decoration: none;
    }

    .nav-link:hover {
        color: #ccc;
    }

    .fa-shopping-cart {
        margin-right: 5px;
    }
</style>
