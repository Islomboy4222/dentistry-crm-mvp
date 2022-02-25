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

<body class="bg-light">
    <!-- header-start -->
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('patients.index')}}">Stomatologiya</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('patients.create')}}">Ro'yhatdan o'tirish</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item dropdown dropend">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
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
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="{{route('patients.index')}}" method="GET" role="search">
            <input class="form-control mr-sm-2" name="term" type="text" placeholder="Ism Familya va Telefon . . ." aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Qidiruv</button>
          </form>
        </div>
      </nav>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <button type="button" class="btn btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="container mt-4 mb-4">
            @yield('content')
    </main>
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
@stack('outer-elements')
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
    <script src="/js/ajax-modal.js"></script>
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