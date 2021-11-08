<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') - Portal Informasi Wisata Desa Ngesrep Balong</title>
    <meta name="description" content="Destinasi Wisata Desa Ngesrep Balong Kendal Jawa Tengah">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" href="https://media.flaticon.com/dist/min/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/gijgo.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/slicknav.css') }}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="/">
                                        <img src="{{ asset('template/img/logo1.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="/">home</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a class="" href="/destinasi">Destinasi</a></li>
                                            {{-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="{{ asset('template/destination_details.html') }}">Destinations details</a></li>
                                                        <li><a href="{{ asset('template/elements.html') }}">elements</a></li>
                                                </ul>
                                            </li> --}}
                                            {{-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{ asset('template/blog.html') }}">blog</a></li>
                                                    <li><a href="{{ asset('template/single-blog.html') }}">single-blog</a></li>
                                                </ul>
                                            </li> --}}
                                            <li><a href="/panduan">Panduan Wisata</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    {{-- <div class="number">
                                        <p> <i class="fa fa-phone"></i> +62 87883231691</p>
                                    </div> --}}
                                    {{-- <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    @yield('slider')
    
    
    <!-- where_togo_area_start  -->
    {{-- <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Where you want to go?</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                            <div class="input_field">
                                <input type="text" placeholder="Where to go?">
                            </div>
                            <div class="input_field">
                                <input id="datepicker" placeholder="Date">
                            </div>
                            <div class="input_field">
                                <select>
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select>
                            </div>
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- where_togo_area_end  -->
    
    
     {{-- @yield('spot') --}}
  @yield('statistik-data-desa')  


    @yield('tujuan-wisata')


    {{-- VIDEO PREVIEW --}}
    @yield('video-preview')

<!--FASILITAS-->
    @yield('fasilitas')

<!--Recent Event/Blog-->
    {{-- <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Recent Trips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{ asset('template/img/trip/1.png') }}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{ asset('template/img/trip/2.png') }}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{ asset('template/img/trip/3.png') }}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{ asset('template/img/logo_footer.png') }}" alt="">
                                </a>
                            </div>
                            <p>Desa Ngeserep Balong <br> Kendal Jawa Tengah <br>
                                <a href="#">+6287 883 231 691</a> <br>
                                <a href="#">official.rizqi@outloook.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        {{-- <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Gallery</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Potensi Wisata
                            </h3>
                            <ul class="links double_links">
                                <li><a href="#">Promasan</a></li>
                                <li><a href="#">Medini</a></li>
                                <li><a href="#">Separe</a></li>
                                <li><a href="#">Gempol</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('template/img/instagram/1.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('template/img/instagram/2.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('template/img/instagram/3.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('template/img/instagram/4.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('template/img/instagram/5.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('template/img/instagram/6.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="{{ asset('template/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('template/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/js/ajax-form.js') }}"></script>
    <script src="{{ asset('template/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/js/scrollIt.js') }}"></script>
    <script src="{{ asset('template/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('template/js/wow.min.js') }}"></script>
    <script src="{{ asset('template/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins.js') }}"></script>
    <script src="{{ asset('template/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('template/js/slick.min.js') }}"></script>


    
    <!--contact js-->
    <script src="{{ asset('template/js/contact.js') }}"></script>
    <script src="{{ asset('template/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.form.js') }}"></script>
    <script src="{{ asset('template/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('template/js/mail-script.js') }}"></script>


    <script src="{{ asset('template/js/main.js') }}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>