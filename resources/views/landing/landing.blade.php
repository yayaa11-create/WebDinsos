<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from themeadapt.com/tf/webze/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 01:41:05 GMT -->
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
                                        <li>
                                            <a href="{{ request()->is('/') ? '#home' : url('/#home') }}" class="section-link">Beranda</a>
                                        </li>
                                        <li>
                                            <a href="{{ request()->is('/') ? '#features' : url('/#features') }}" class="section-link">Sekolah Rakyat</a>
                                        </li>
                                        <li>
                                            <a href="{{ request()->is('/') ? '#token' : url('/#token') }}" class="section-link">Profil</a>
                                        </li>
                                        <li>
                                            <a href="{{ request()->is('/') ? '#work' : url('/#work') }}" class="section-link">Layanan Publik</a>
                                        </li>
                                        <li>
                                            <a href="{{ request()->is('/') ? '#roadmap' : url('/#roadmap') }}" class="section-link">Sosial Pedia</a>
                                        </li>
                                        <li>
                                            <a href="{{ request()->is('/') ? '#berita' : url('/#berita') }}" class="section-link">Berita</a>
                                        </li>
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

        <!-- banner-area -->
        <section class="banner__area banner__bg" data-background="{{asset('LP/assets/img/banner/hero_bg.svg')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="banner__content">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">"Menciptakan Pelayanan Yang Tertib, Baik dan Memuaskan"</span>
                            <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">Dinas <span>Sosial</span> Kabupaten Garut</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">Memberikan Pelayanan Yang Mudah, Jelas Dan Profesional</p>
                            <span class="banner__content-bottom wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">Jelajahi Lebih Lanjut <a href="#token">Tentang Kami!</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner__shape">
                <img src="{{asset('LP/assets/img/banner/hero_img01.png')}}" alt="shape" class="alltuchtopdown">
                <img src="{{asset('LP/assets/img/banner/hero_img02.png')}}" alt="shape" class="rotateme">
                <img src="{{asset('LP/assets/img/banner/hero_img03.png')}}" alt="shape" class="alltuchtopdown">
                <img src="{{asset('LP/assets/img/banner/hero_bg_shape.svg')}}" alt="shape" class="banner__bg-shape">
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- brand-area -->
        
        <!-- brand-area-end -->

        <!-- features-area -->
        <section id="features" class="features__area section-pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-80">
                            <span class="sub-title">Cerdas Bersama, Tumbuh Setara</span>
                            <h2 class="title">Sekolah <span>Rakyat</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-40">
                    <div class="col-lg-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="{{asset('LP/assets/img/icon/features_icon01.png')}}" alt="icon">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Apa itu <span>Sekolah Rakyat?</span></h4>
                                <p>Sekolah Rakyat didirikan sebagai upaya pemerintah dalam memutus rantai kemiskinan melalui pendidikan. Program ini ditujukan untuk anak-anak yang berasal dari keluarga yang termasuk dalam miskin dan miskin ekstrim berdasarkan DTSEN</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="{{asset('LP/assets/img/icon/features_icon02.png')}}" alt="icon">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Program <span>Aktivitas</span></h4>
                                <p>Sekolah Rakyat dirancang sebagai sekolah berasrama untuk memastikan para siswa mendapatkan pendidikan dan pengasuhan yang optimal. Fasilitas yang disediakan mencakup asrama bagi siswa dan guru serta ruang kelas yang dilengkapi dengan sarana belajar modern.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="features__shape">
                <img src="{{asset('LP/assets/img/images/features_shape.png')}}" alt="shape">
            </div>
        </section>
        <!-- features-area-end -->

        <!-- marquee-area -->
        <section class="marquee__area section-pt-120">
            <div class="slider__marquee clearfix marquee-wrap">
                <div class="marquee_mode marquee__group">
                    <h6 class="marquee__item">Memuliakan Keluarga Miskin</h6>
                    <h6 class="marquee__item">Memfasilitasi Kebangkitan Wong Cilik</h6>
                </div>
            </div>
        </section>
        <!-- marquee-area-end -->

        <!-- token-area -->
        <section id="token" class="token__area section-py-120">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-12">
                        <div class="faq__content" data-aos="fade-left" data-aos-delay="0">
                            <div class="section__title mb-60">
                                <span class="sub-title">Profil</span>
                            </div>
                            <div class="faq__wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Struktur Organisasi
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <img src="{{asset('LP/assets/img/images/struktur.jpeg')}}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Kedudukan
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>1. Dinas Sosial dipimpin oleh Kepala Dinas Sosial.</p>
                                                <p>2. Kepala Dinas Sosial berkedudukan di bawah dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah.</p>
                                                <p>3. Dinas Sosial berada di bawah koordinasi Asisten Kesejahteraan Rakyat Sekretaris Daerah.</p>
                                                <p>4. Kepala Dinas Sosial melaksanakan tugas memimpin, mengkoordinasikan, melaporkan dan mempertanggungjawabkan penyelenggaraan urusan pemerintahan bidang sosial.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Tugas
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Tugas utama Dinas Sosial adalah membantu pemerintah daerah dalam melaksanakan urusan pemerintahan di bidang sosial, termasuk perumusan dan pelaksanaan kebijakan teknis, perlindungan sosial, rehabilitasi sosial, pemberdayaan sosial, serta penanganan fakir miskin.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Fungsi
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>1. Perumusan kebijakan di bidang rehabilitasi sosial dan jaminan perlindungan sosial, pemberdayaan sosial dan penanganan fakir miskin.</p>
                                                <p>2. Pelaksanaan kebijakan di bidang rehabilitasi social dan jaminan perlindungan social, pemberdayaan social dan penanganan fakir miskin</p>
                                                <p>3. Pelaksanaan evaluasi dan pelaporan di bidang rehabilitasi social dan jaminan perlindungan social, pemberdayaan social dan penanganan fakir miskin</p>
                                                <p>4. Pelaksanaan administrasi di bidang rehabilitasi sosial dan jaminan perlindungan sosial, pemberdayaan sosial dan penanganan fakir miskin; dan</p>
                                                <p>5. Pelaksanaan fungsi lain yang diberikan oleh Walikota terkait dengan tugas dan fungsinya.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Visi
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>"Terwujudnya Tatanan Kehidupan Masyarakat Di Kabupaten Garut Atas Dasar Kebersamaan dan Kemanusiaan"</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Misi
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>1. Mewujudkan Kesejahteraan Masyarakat dengan Kesetaraan dan Keadilan</p>
                                                <p>2. Memperkuat Kelembagaan Sosial Masyarakat untuk Kesatuan dan Kemasyarakatan</p>
                                                <p>3. Memperkuat Partisipasi Masyarakat dalam Menanggulangi Bencana</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- token-area-end -->

        <!-- section-divider -->
        <div class="section-divider">
            <div class="container">
                <span></span>
            </div>
        </div>
        <!-- section-divider-end -->

        <!-- work-area -->
        <section id="work" class="work__area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-80">
                            <span class="sub-title">Layanan dan Pengaduan</span>
                            <h2 class="title">"Menciptakan Pelayanan Yang <span>Tertib,</span> Baik dan Memuaskan"</h2>
                        </div>
                    </div>
                </div>
                <div class="work__item-wrap">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="0">
                            <div class="work__item mb-0">
                                <h1 class="number">01</h1>
                                <h4 class="title">Pengusulan dan Pengecekan <span>DTKS</span></h4>
                                <p>Pelayanan untuk mengajukan dan memastikan status data warga dalam Data Terpadu Kesejahteraan Sosial sebagai dasar penerimaan bantuan sosial.</p>
                            </div>
                            <div class="work__item mb-0">
                                <h1 class="number">02</h1>
                                <h4 class="title">Permohonan Subsidi <span>Listrik</span></h4>
                                <p>Pelayanan untuk mengajukan bantuan keringanan biaya listrik bagi keluarga yang memenuhi syarat kesejahteraan.</p>
                            </div>
                            <div class="work__item mb-0">
                                <h1 class="number">03</h1>
                                <h4 class="title">Fasilitas Keringanan Biaya <span>Kesehatan</span></h4>
                                <p>Pelayanan yang membantu warga mendapatkan pengurangan atau pembebasan biaya berobat berdasarkan kondisi sosial dan ekonomi mereka.</p>
                            </div>
                            <div class="work__item mb-0">
                                <h1 class="number">04</h1>
                                <h4 class="title">Pengajuan dan Perpanjangan Tanda Terdaftar <span>LKS</span></h4>
                                <p>Pelayanan untuk mendaftarkan serta memperbarui legalitas Lembaga Kesejahteraan Sosial agar diakui secara resmi oleh pemerintah.</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="0">
                            <div class="work__item work__item-right mb-0">
                                <h1 class="number">05</h1>
                                <h4 class="title">Pengusulan <span>KIS PBI APBN</span></h4>
                                <p>Pelayanan untuk mengajukan kepesertaan Jaminan Kesehatan bagi warga kurang mampu yang iurannya ditanggung oleh pemerintah pusat.</p>
                            </div>
                            <div class="work__item work__item-right mb-0">
                                <h1 class="number">06</h1>
                                <h4 class="title">Pengaduan Program Keluarga Harapan <span>(PKH)</span></h4>
                                <p>Pelayanan untuk menerima dan menindaklanjuti keluhan atau masalah terkait bantuan PKH yang dialami oleh masyarakat.</p>
                            </div>
                            <div class="work__item work__item-right mb-0">
                                <h1 class="number">07</h1>
                                <h4 class="title">Rekomendasi Pengangkatan, Pengasuhan dan Perwalian <span>Anak</span></h4>
                                <p>Pelayanan untuk menilai dan menerbitkan rekomendasi resmi bagi pihak yang ingin mengangkat, mengasuh, atau menjadi wali anak sesuai ketentuan perlindungan anak.</p>
                            </div>
                            <div class="work__item work__item-right mb-0">
                                <h1 class="number">08</h1>
                                <h4 class="title">Pemberian Bantuan Bagi <span>Korban Bencana./</span></h4>
                                <p>Pelayanan untuk menyalurkan bantuan darurat kepada masyarakat yang terdampak bencana guna memenuhi kebutuhan dasar mereka.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work-area-end -->

        <!-- exchange-area -->
        <!-- exchange-area-end -->

        <!-- crypto-area -->
        
        <!-- crypto-area-end -->
        <!-- faq-area -->
        
        <!-- faq-area-end -->

        <!-- section-divider -->
        
        <!-- section-divider-end -->

        <!-- roadmap-area -->
        <section id="roadmap" class="roadmap__area section-py-120">
        <div class="container">
            <div class="row align-items-start">
                <div class="section__title mb-60">
                    <span class="sub-title">Sosial Pedia</span>
                    <h2 class="title">Kenali kata-kata yang jarang <span>didengar,</span> <br> tetapi penting untuk diketahui.</h2>
                </div>

            <!-- KOLOM KIRI -->
                <div class="col-lg-6">
                    <div class="faq__content">
                        <div class="faq__wrap">
                            <div class="accordion" id="accordionLeft">

                                @foreach($sosped->filter(fn($i, $k) => $k % 2 == 0) as $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#left{{ $item->kodesosped }}">
                                            {{ $item->title }}
                                        </button>
                                    </h2>
                                    <div id="left{{ $item->kodesosped }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionLeft">
                                        <div class="accordion-body">
                                            <p>{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            <!-- KOLOM KANAN -->
                <div class="col-lg-6">
                    <div class="faq__content">
                        <div class="faq__wrap">
                            <div class="accordion" id="accordionRight">

                                @foreach($sosped->filter(fn($i, $k) => $k % 2 == 1) as $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#right{{ $item->kodesosped }}">
                                            {{ $item->title }}
                                        </button>
                                    </h2>
                                    <div id="right{{ $item->kodesosped }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionRight">
                                        <div class="accordion-body">
                                            <p>{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </section>


        <!-- roadmap-area-end -->
        

        <!-- team-area -->
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

                <div class="load-more-btn text-center">
                    <a href="{{route('more')}}" class="tg-btn tg-btn-two">Lihat Selengkapnya</a>
                </div>
            </div>

        </section>
        <!-- team-area-end -->

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
                            <h3 class="title">Memberikan Pelayanan yang <span>Mudah,</span> Jelas dan Profesional</h3>
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
                                        <a href="https://www.instagram.com/dinsosgarut?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                                            <div class="shape">
                                                <img src="{{asset('LP/assets/img/icon/icons_bg.svg')}}" alt="shape">
                                            </div>
                                            <img src="{{asset('LP/assets/img/icon/instagram.svg')}}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.youtube.com/@dinassosialkabupatengarut6625">
                                            <div class="shape">
                                                <img src="{{asset('LP/assets/img/icon/icons_bg.svg')}}" alt="shape">
                                            </div>
                                            <img src="{{asset('LP/assets/img/icon/youtube.svg')}}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://api.whatsapp.com/send/?phone=6281311115125&text&type=phone_number&app_absent=0">
                                            <div class="shape">
                                                <img src="{{asset('LP/assets/img/icon/icons_bg.svg')}}" alt="shape">
                                            </div>
                                            <img src="{{asset('LP/assets/img/icon/whatsapp.svg')}}" alt="icon" class="icon">
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


<!-- Mirrored from themeadapt.com/tf/webze/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 01:42:12 GMT -->
</html>