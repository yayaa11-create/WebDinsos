<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>SIMAK (Sistem Informasi Masyarakat Kurang Mampu)</title>

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
    <link href="{{asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="vertical-layout">    
    
    <div id="containerbar">
        <div class="leftbar">
            @include ('layouts/sidebar')
        </div>
        <div class="rightbar">
           @include ('layouts/navbar')                
            @yield ('breadcrumb')

            <div class="contentbar">             
                @yield ('content')
            </div>
            @include ('layouts/footer')
        </div>
    </div>

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/vertical-menu.js')}}"></script>
    <script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/plugins/apexcharts/irregular-data-series.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/custom/custom-dashboard-crypto.js')}}"></script>
    <script src="{{asset('assets/js/core.js')}}"></script>
</body>

</html>