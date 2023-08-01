<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{route('back.home')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img src="{{asset('/')}}front-assets/img/logo/rongo.png" alt="" style="height: 75px; width: 75px;">Rango Admin</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">

                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('back.home')}}" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <a href="{{route('add.category')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Add Category</a>
            <a href="{{route('manage-category')}}" class="nav-item nav-link"><i class="fa fa-edit me-2"></i>Manage Category</a>
            <a href="{{route('add-product')}}" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Product Upload</a>
            <a href="{{route('manage-product')}}" class="nav-item nav-link"><i class="fa fa-puzzle-piece me-2"></i>Manage Product</a>
            <a href="{{route('payment.view')}}" class="nav-item nav-link"><i class="fa fa-credit-card me-2"></i>Payments View</a>
            <a href="{{route('contact.view')}}" class="nav-item nav-link"><i class="fa fa-file-text me-2"></i>Contact Message</a>
            <a href="{{route('front.home')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Front View</a>

        </div>
    </nav>
</div>
<!-- Sidebar End -->
