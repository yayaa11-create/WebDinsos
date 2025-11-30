@extends('layouts/app')
@section('breadcrumb')
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>          
            </div>
@endsection

@section('content')
<div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Selamat Datang di Website Kami!!</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Sistem Informasi Masyarakat Kurang Mampu (SIMAK).</h6>
                                <img src="{{asset('assets/images/ui-images/image-responsive.jpg')}}" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>

 @endsection