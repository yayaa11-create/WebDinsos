<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from themeadapt.com/tf/webze/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 01:42:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dinas Sosial Kabupaten Garut</title>
    <meta name="description" content="Webze -  ICO & Crypto Landing Page Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('LP/assets/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('LP/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('LP/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('LP/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('LP/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('LP/assets/css/default-icons.css')}}">
    <link rel="stylesheet" href="{{asset('LP/assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('LP/assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('LP/assets/css/main.css')}}">
    
</head>

<body>

    <!--Preloader-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header id="home">
        <div id="sticky-header" class="tg-header__area transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <img src="{{asset('LP/assets/img/logo/logo.svg')}}" alt="Logo"></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li><a href="{{ url('/') }}#home">Beranda</a></li>
                                        <li><a href="{{ url('/') }}#features">Sekolah Rakyat</a></li>
                                        <li><a href="{{ url('/') }}#token">Profil</a></li>
                                        <li><a href="{{ url('/') }}#work">Layanan Publik</a></li>
                                        <li><a href="{{ url('/') }}#roadmap">Sosial Pedia</a></li>
                                        <li><a href="{{ url('/more') }}">Berita</a></li>

                                    </ul>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="header-btn">
                                            <a href="{{route('pengaduan')}}" class="tg-btn">Pengaduan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                <div class="nav-logo">
                    <a href="{{ request()->is('/') ? '#home' : url('/#home') }}"><img src="{{asset('LP/assets/img/logo/logo.svg')}}" alt="Logo"></a>
                </div>
                <div class="tgmobile__search">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="https://www.facebook.com/profile.php?id=100048797563636"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/dinsosgarut?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send/?phone=6281311115125&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="www.youtube.com/@dinassosialkabupatengarut6625"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->

    </header>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section id="berita" class="berita__area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner__content breadcrumb__content mb-5">
                            <span class="sub-title">Berita Terbaru</span>
                            <h2 class="title">Berita & Artikel</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape">
                <img src="{{asset('LP/assets/img/images/features_shape.png')}}" alt="">
            </div>

            <div class="container">
                <div class="row justify-content-center gutter-50">

                @foreach($berita as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="blog__post-item shine__animate-item">
                
                        <div class="blog__post-thumb">
                        @if ($item->foto)
                            <img src="{{ url('foto/'.$item->foto) }}" alt="img">
                        @endif
                        </div>

                        <div class="blog__post-content">
                            <span class="date">{{ $item->tanggal }}</span>
                            <h2 class="title">{{ $item->title }}</h2>
                        </div>

                    </div>
                </div>
                @endforeach

                </div>

            </div>

        </section>
        <!-- blog-post-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer__area">
        <div class="container">
            <div class="footer__top">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer__content">
                            <div class="footer__logo">
                                <a href="#"><img src="{{asset('LP/assets/img/logo/logo.svg')}}" alt="logo"></a>
                            </div>
                            <h4 class="title">Berita terkini untuk <span>masyarakat </span> yang lebih informatif.</h4>
                            <div class="team__social-wrap">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100048797563636">
                                            <div class="shape">
                                                <img src="{{asset('LP/assets/img/icon/icons_bg.svg')}}" alt="shape">
                                            </div>
                                            <img src="{{asset('LP/assets/img/icon/facebook.svg')}}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="shape">
                                                <img src="{{asset('LP/assets/img/icon/icons_bg.svg')}}" alt="shape">
                                            </div>
                                            <img src="{{asset('LP/assets/img/icon/twitter.svg')}}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="shape">
                                                <img src="{{asset('LP/assets/img/icon/icons_bg.svg')}}" alt="shape">
                                            </div>
                                            <img src="{{asset('LP/assets/img/icon/telegram.svg')}}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="shape">
                                                <img src="{{asset('LP/assets/img/icon/icons_bg.svg')}}" alt="shape">
                                            </div>
                                            <img src="{{asset('LP/assets/img/icon/discord.svg')}}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="copyright-text">
                    <p>Copyright by <a href="{{route('login')}}"><span class="c-bold">Alya Azmi Anjani</span></a> - 2025</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->





    <!-- JS here -->
    <script src="{{asset('LP/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('LP/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('LP/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('LP/assets/js/jquery.marquee.min.js')}}"></script>
    <script src="{{asset('LP/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('LP/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('LP/assets/js/jquery.easing.js')}}"></script>
    <script src="{{asset('LP/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('LP/assets/js/aos.js')}}"></script>
    <script src="{{asset('LP/assets/js/main.js')}}"></script>
</body>


<!-- Mirrored from themeadapt.com/tf/webze/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 01:42:52 GMT -->
</html>