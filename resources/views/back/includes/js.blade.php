<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/chart/chart.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/easing/easing.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/tempusdominus/js/moment.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="{{asset('/')}}back-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js.map" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif
</script>
<script>
    @if(Session::has('message-for-delete'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('message-for-delete') }}");
    @endif
</script>


<!-- Template Javascript -->
<script src="{{asset('/')}}back-assets/js/main.js"></script>
</body>

</html>
