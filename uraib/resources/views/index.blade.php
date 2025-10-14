<!doctype html>
<html lang="en">

<!-- Mirrored from techsolit.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Oct 2025 17:09:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>NOVA CREATION</title>
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="Keywords" content="" />



    {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/techsol-fav.webp"> --}}
    <!-- Place favicon.ico in the root directory -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css')}}">
    <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <style>
        .foot-about a img,
        .navbar-light a.navbar-brand img {
            width: 170px;
        }

        .foot-about a img {
            filter: invert(1) brightness(3.5);
        }
    </style>

</head>

<body class="homepage">


  {{-- nav section --}}
    @yield('nav')

    {{-- home content --}}
     @yield('content')
   
    {{-- footer --}}
     @yield('footer')

    <!-- nft-address -->
    <div class="modal fade theme-popup" id="propertydetails" tabindex="-1" aria-labelledby="propertydetails"
        aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered text-center">
            <div class="modal-content first-step">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="first-step">
                    <img src="#" alt="popoup-img">
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <label class="proximab">NFT Address</label>
                            <a href="#" class="#"><i class="fa fa-plus"></i> Add More</a>
                        </div>
                        <input class="form-control" name="nftaddress" type="text">
                    </div>
                    <a class="theme-btn btn-center">Submit</a>
                </div>
                <div class="sec-step" style="display:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="text-center">Plan Is Unlcoked</h2>
                    <a href="#" class="theme-btn btn-center">View Subscription</a>
                </div>
            </div>
        </div>
    </div>



    <script src="{{asset('ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}"></script>
    <script src="{{asset('cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js')}}"></script>
    <script src="{{asset('cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js')}}"></script>
    <script type="text/javascript"
        src="{{asset('cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from techsolit.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Oct 2025 17:13:35 GMT -->

</html>