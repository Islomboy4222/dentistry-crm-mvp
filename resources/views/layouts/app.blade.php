<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stomatologiya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="/image/x-icon" href="/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/gijgo.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="#">
                                    <img src="/img/tooth1.jpg" width="70" height="50">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="float-right">
                                <a href="{{route('patients.create')}}">
                                    <button type="button" class="btn btn">Ro'yhatdan o'tirish</button>
                                </a>
                            </div>
                            {{-- search --}}
                            <div class="mx-auto pull-right col-lg-8">
                                <div class="">
                                    <form action="{{route('search')}}" method="GET" role="search">
                                        <div class="input-group float-left">
                                            <input type="text" class="form-control " name="term" placeholder="Ism, Familiya va Telefon...." id="term">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit" title="Search projects">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{-- end search --}}
                        </div>
                        {{-- dropdown --}}
                        <div class="btn-group">
                            <button type="button" class="btn btn">{{Auth::user()->name}}</button>
                            <button type="button" class="btn btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Chiqish') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </div>
                          </div>
                        {{-- dropdown --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        @yield('content')
    </div>

<!-- footer start -->
<footer class="footer">
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Stomatologiya &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa-solid fa-tooth"></i>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->    
    <!-- JS here -->
    <script src="/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/ajax-form.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/scrollIt.js"></script>
    <script src="/js/jquery.scrollUp.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/nice-select.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="/js/contact.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/jquery.form.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/mail-script.js"></script>

    <script src="/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
    @stack('scripts')
</body>

</html>