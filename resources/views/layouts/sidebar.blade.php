<div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="{{route('dashboard')}}" class="logo logo-large"><img src="{{asset('assets/images/logo.svg')}}" class="img-fluid" alt="logo"></a>
                    <a href="{{route('dashboard')}}" class="logo logo-small"><img src="{{asset('assets/images/small_logo.svg')}}" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li>
                            <a href="javaScript:void();">
                              <img src="{{asset('assets/images/svg-icon/dashboard.svg')}}" class="img-fluid" alt="dashboard"><span>Dashboard</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{route('about')}}">Tentang Kami</a></li>
                                <li><a href="{{route('berita.index')}}">Berita Terbaru</a></li>
                                <li><a href="{{route('sosped.index')}}">Sosial Pedia</a></li>
                            </ul>
                        </li>                                
                                                     
                        <li>
                            <a href="javaScript:void();">
                              <img src="{{asset('assets/images/svg-icon/basic.svg')}}" class="img-fluid" alt="dashboard"><span>Data Geografis</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{route('kecamatan.index')}}">Data Kecamatan</a></li>
                            </ul>
                        </li> 
                        
                        <li>
                            <a href="javaScript:void();">
                              <img src="{{asset('assets/images/svg-icon/basic.svg')}}" class="img-fluid" alt="dashboard"><span>Data DTSEN</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{route('bansos.index')}}">Data Penerima Bansos</a></li>
                                <li><a href="{{route('rekap')}}">Rekap DTSEN</a></li>
                            </ul>
                        </li> 

                        <li>
                            <a href="javaScript:void();">
                              <img src="{{asset('assets/images/svg-icon/apps.svg')}}" class="img-fluid" alt="dashboard"><span>Pengaduan</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{route('laporan.index')}}">Laporan Pengaduan</a></li>
                            </ul>
                        </li>                                  
                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>