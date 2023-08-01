<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var lastScrollTop = 0;
        var mainMenu = $('.main-menu');
        var isScrollingUp = false;

        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();

            if (scrollTop > lastScrollTop) {
                // Scrolling down
                isScrollingUp = false;
                mainMenu.addClass('fixed');
            } else {
                // Scrolling up
                isScrollingUp = true;
            }

            if (isScrollingUp && scrollTop === 0) {
                // Reached the top of the page, unfix the menu
                mainMenu.removeClass('fixed');
            }

            lastScrollTop = scrollTop;
        });
    });
</script>
<style>
    /* Add this CSS to your stylesheet */
    .main-menu-wrapper {
        position: relative;
        z-index: 999;
    }

    .main-menu.fixed {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        transition: top 0.3s;
    }

    .main-menu:not(.fixed) {
        transition: none;
    }
</style>



<div class="main-header-wrapper bdr-bottom1">
    <div class="col-md-12">
        <div class="main-header-inner d-flex justify-content-between">
            <br>
            <br>
            <div class="col-md-3">
                <div class="category-toggle-wrap">
                    <div class="category-toggle">
                        Category
                        <div class="cat-icon">
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                    <nav class="category-menu hm-1">
                        @foreach($categorys as $category)
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#">{{$category->newCategory}}</a>
                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu">
                                        <li class="menu-item-has-children">
                                            <ul>
                                                    <?php $printedBrands = []; ?>
                                                @foreach($products as $product)
                                                    @if($category->newCategory == $product->category && !in_array($product->brand, $printedBrands))
                                                        <!-- Display the brand only if it hasn't been printed before -->
                                                        <li><a href="{{ route('front.all', ['brand' => $product->brand]) }}">{{$product->brand}}</a></li>
                                                            <?php $printedBrands[] = $product->brand; ?>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- Mega Category Menu End -->
                                </li>
                            </ul>
                        @endforeach
                    </nav>
                </div>
            </div>

            <div class="col-md-9">
                <div class="main-menu-wrapper">
                    <div class="main-menu" style="background-color: #800000;">
                        <nav id="mobile-menu" class="navbar-expand-sm">
                            <ul class="navbar-nav">
                                <li><a href="{{route('front.home')}}"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li><a href="{{route('about')}}">about</a></li>
                                <li><a href="{{route('front.contacts')}}">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-block d-lg-none">
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</div>

