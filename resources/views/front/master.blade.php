<!DOCTYPE html>
<html class="no-js" lang="en">

@include('front.includes.style')

<body>
<div class="wrapper">

    @include('front.includes.authMenu')

    @yield('body')

    @include('front.includes.footer')

</div>

<!-- Quick view modal start -->
<div class="modal" id="quick_view">
    <!-- Quick view modal content here -->
</div>
<!-- Quick view modal end -->

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->

@include('front.includes.js')

</body>

</html>
