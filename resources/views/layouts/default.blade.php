
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body data-spy="scroll" data-target=".fixed-top">
      <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
<!-- <div class="container"> -->

   
            @yield('content')

    <!-- </div> -->

    <!-- <footer class="row"> -->
        @include('includes.footer')
    <!-- </footer> -->

<!-- </div> -->

    <script src="{{url('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{url('js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{url('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{url('js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{url('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{url('js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{url('js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{url('js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
    <script src="{{url('js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{url('js/scripts.js')}}"></script> <!-- Custom scripts -->
    {{-- <script src="js/jquery.min.js"></script> --}}
    {{-- <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
   
 	 --}}
    

   
</body>
</html>