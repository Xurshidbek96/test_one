<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Norin Kasb-Hunar Maktabi</title>

    <!-- Fav Icons -->
    <link rel="shortcut icon" href="/assets/images/logo22.png" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/spacing.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!--==================================================================== 
                                Start Header area
        =====================================================================-->
        <header class="main-header">

            <div class="header-top bg-orange">
                <div class="container">
                    <div class="top-inner">
                        <ul class="top-left">
                            <li><i class="fa fa-envelope"></i> <a href="mailto:support24@domain.com">email@.com</a></li>
                            <li><i class="fas fa-map-marker-alt"></i>Norin tumani 1-sonli Kasb-Hunar Maktabi</li>
                        </ul>

                        <div class="top-right ml-auto">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-telegram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">

                    <div class="header-inner d-lg-flex align-items-center">

                        <div class="logo-outer d-flex align-items-center">
                            <div class="logo"><a href="{{url('/')}}"><img src="/assets/images/logo.png" alt=""
                                        class="img-fluid" title=""></a></div>
                        </div>

                        <div class="nav-outer clearfix ml-lg-auto mr-lg-auto">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header clearfix">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="{{url('/')}}">Bosh sahifa</a></li>
                                        <li><a href="{{url('/about')}}">Biz haqimizda</a></li>
                                        <li class="dropdown"><a href="#">Yangiliklar va E'lonlar</a>
                                            <ul>
                                                <li><a href="{{url('/news')}}">Yangiliklar</a></li>
                                                <li><a href="{{url('/video')}}">Video</a></li>
                                                <li><a href="{{url('/docs')}}">Hujjatlar</a></li>
                                                <li><a href="{{url('/qabul')}}">Qabul</a></li>
                                                <li><a href="{{url('/bandlik')}}">Bandlik</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Xodimlar</a>
                                            <ul>
                                                <li><a href="{{url('/rahbariyat')}}">Rahbariyat</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/contact')}}">Aloqa</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <div class="menu-number">
                            <i class="flaticon-headphone"></i> <a href="tel:+998 69 612-13-52">+998 69 612-13-52</a>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->
        </header>
        <!--==================================================================== 
                                End Header area
        =====================================================================-->

        @yield('content')

        <!--==================================================================== 
                                Start Footer Section
        =====================================================================-->
        <footer class="footer-section bg-black pt-150 rpt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <div class="widget contact-info-widget">
                            <h4 class="widget-title">Norin tumani 1-sonli Kasb-Hunar maktabi</h4>
                            <ul>
                                <li>
                                    <h5>Manzil:</h5>
                                    <p>Norin tuman 1-son kasb-hunar maktabi Namangan viloyati Norin tumani, Xaqqulobod shahar, O‘zbekiston ko‘chasi 183-uyda</p>
                                </li>
                                <li>
                                    <h5>Telefon Raqamlar</h5>
                                    <p><a href="tel:+998 69 612-13-52">+998 69 612-13-52</a></p>
                                    <p><a href="tel:+998 69 612-13-52">+998 69 612-13-52</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6">
                        <div class="widget menu-widget">
                            <h3 class="widget-title">Havolalar</h3>
                            <ul>
                                <li><a href="{{url('/about')}}">Biz haqimizda </a></li>
                                <li><a href="{{url('/news')}}">Yangiliklar </a></li>
                                <li><a href="{{url('/rahbariyat')}}">Rahbariyat </a></li>
                                <li><a href="{{url('/contact')}}">Aloqa </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="widget subscribe-widget">
                            <h3 class="widget-title">Ijtimoiy tarmoqlar</h3>
                            <form action="#" method="post" name="subscribe-form" class="subscribe-form">
                            </form>
                            <div class="social-style-two mt-20">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-telegram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright Area-->
            <div class="copyright-area mt-95 rmt-45">
                <div class="container">
                    <div class="copyright-inner align-items-center">
                       <h5 class="text-light">Kasb-Hunar Maktabi</h5>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!--==================================================================== 
                                End Footer Section
        =====================================================================-->
    </div>
    <!--End pagewrapper-->

    <!-- jequery plugins -->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/leaflet.min.js')}}"></script>
    <script src="{{asset('assets/js/appear.js')}}"></script>
    <!-- Custom script -->
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>