<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from themeadapt.com/tf/webze/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 01:42:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIMAK (Sistem Informasi Masyarakat Kurang Mampu)</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    
</head>

<body>
    <div id="home">

    </div>

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
                                        <li>
                                            <a href="{{ url('/') }}">Beranda</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}">Sekolah Rakyat</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}">Profil</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}">Layanan Publik</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}">Sosial Pedia</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}">Berita</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="header-btn">
                                            <a href="{{ route('pengaduan') }}" class="tg-btn">Pengaduan</a>
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
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog__details-area section-py-120">
            @if(session('success'))
				<p class="alert alert-success">{{session('success')}}</p>
			@endif
            <div class="container">
                <div class="blog__details-wrap">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-12">
                            <div class="banner__content">
                                <span class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Layanan Pengaduan</span>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">Layanan <span>Aspirasi</span> dan Pengaduan Online Rakyat</h2>
                                <p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang.</p>
                                <div class="card-header py-3">
                                    <h5>Sampaikan Laporan Anda </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog__details-content">
                        
                                <form action="{{route('pengaduan.store')}}" method="POST" class="banner__form wow fadeInUp" enctype="multipart/form-data"
                                    data-wow-delay=".8s" data-wow-duration="1s"
                                    style="width: 100%; display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                                    @csrf
                                    <div class="select-box" style="grid-column: span 2;">

                                        <select id="klasifikasi" name="klasifikasi">
                                            <option value="">Pilih Klasifikasi Laporan</option>
                                            <option value="A">PENGADUAN</option>
                                            <option value="B">ASPIRASI</option>
                                            <option value="C">PERMINTAAN INFORMASI</option>
                                        </select>
                                    </div>

                                    <div class="card-header py-3" style="grid-column: span 2;">
                                        <div class="load-more-btn text-center">
                                            <h6>Perhatikan Cara Menyampaikan Pengaduan Yang Baik dan Benar </h6>
                                            <a href="{{ asset('LP/assets/img/images/panduan.jpeg') }}" target="_blank" class="tg-btn tg-btn-two">
                                                Lihat Panduan
                                            </a>

                                        </div>
                                    </div>
                                    
                                    <div class="input-box" style="grid-column: span 2;">
                                        <label for="email1"></label>
                                        <input type="text" id="title" name="title" placeholder="Judul Laporan">
                                    </div>

                                    <div class="input-box" style="grid-column: span 2;">
                                        <label for="isi_laporan"></label>
                                        <textarea id="isi_laporan" name="deskripsi" placeholder="Isi Laporan"></textarea>
                                    </div>



                                    <div class="input-box">
                                        <label for="tanggal3"></label>
                                        <input type="text" id="tanggal3" name="tanggal" placeholder="Tanggal">
                                    </div>


                                    <div class="input-box">
                                        <label for="email4"></label>
                                        <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi">
                                    </div>

                                    <div class="input-box">
                                        <label for="email5"></label>
                                        <input type="text" id="instansi" name="instansi" placeholder="Instansi Tujuan">
                                    </div>

                                    <div class="select-box" >
                                        <select id="kategori" name="kategori">
                                            <option value="">Pilih Kategori Laporan</option>
                                            <option value="A">Undangan</option>
                                            <option value="B">Transfer dari Bank</option>
                                            <option value="C">Topik Lainnya</option>
                                            <option value="D">Topik Khusus</option>
                                            <option value="E">Tindak Pidana</option>
                                            <option value="F">Tidak Dapat Email Balasan Pada Pendaftaran on-line</option>
                                            <option value="G">Tidak Aktif</option>
                                            <option value="H">Tidak Ada Balasan SMS Gateway</option>
                                            <option value="I">Testing Kategori</option>
                                            <option value="J">Tenaga Perpustakaan</option>
                                        </select>
                                    </div>

                                    <div class="input-box">
                                        <label for="lampiran"></label>
                                        <span class="file-placeholder" style="padding-left:10px;">Upload Lampiran</span>
                                        <input type="file" id="lampiran" name="foto">
                                    </div>

                                    <div style="
                                        grid-column: 1 / -1 !important;
                                        position: relative !important;
                                        width: 100% !important;
                                        height: 1px; /* cukup untuk menempatkan tombol di baris baru */
                                    ">
                                        <div style="
                                            grid-column: span 2 !important;
                                            width: 100% !important;
                                            display: flex !important;
                                            justify-content: center !important;
                                            margin-top: 40px !important;
                                        ">

                                            <button 
                                                type="submit" 
                                                class="tg-btn tg-btn-two"
                                                style="
                                                    position: static !important;
                                                    left: auto !important;
                                                    right: auto !important;
                                                    bottom: auto !important;
                                                    margin: 0 auto !important;
                                                    display: block !important;
                                                "
                                            >
                                                Lapor
                                            </button>

                                        </div>
                                    </div>



                                </form>
                                
                                <div class="text-center" style="grid-column: span 2; margin-bottom: 30px;">
                                    <p style="margin-top: 80px !important;">Silahkan laporkan dengan apa yang sebenar-benarnya terjadi.</p>
                                </div>
                       
                                <div class="banner__content" style="grid-column: span 2;">
                                    <h4 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">"Berani <span>Lapor!</span> Untuk Pelayanan Publik yang Lebih Baik"</h4>
                                </div>
                                
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer__area footer__area-two">
        <div class="container">
            
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
    <script>
        flatpickr("#tanggal3", {
            dateFormat: "Y-m-d"
        });
    </script>

</body>


<!-- Mirrored from themeadapt.com/tf/webze/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 01:42:55 GMT -->
</html>