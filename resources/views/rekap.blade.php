@extends('layouts/app')
@section('breadcrumb')
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Rekap DTSEN</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data DTSEN</a></li>
                                <li class="breadcrumb-item"><a href="#">Rekap DTSEN</a></li>
                            </ol>
                        </div>
                    </div>
                </div>          
            </div>
@endsection

@section('content')
         <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- Dashboard Start -->
                            <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                                
                                <div class="card-body">                                
                                 <div class="card m-b-40">
                                    <div class="card-header">                                
                                        <h5 class="card-title mb-0">Rekap DTSEN Kabupaten Garut</h5>
                                    </div>
                                    
                                </div>
                                    <div class="row mb-5">
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-4"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-5">
                                                        <span class="action-icon badge badge-primary-inverse mr-0"><i class="feather icon-map-pin"></i></span>
                                                    </div>
                                                    <div class="col-7 text-right">
                                                        <h5 class="card-title font-14 text-primary">Wilayah</h5>
                                                        <h5 class="card-title font-14 text-primary">Kabupaten Garut</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col -->
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-4"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-5">
                                                        <span class="action-icon badge badge-primary-inverse mr-0"><i class="feather icon-users"></i></span>
                                                    </div>
                                                    <div class="col-7 text-right">
                                                        <h5 class="card-title font-14 text-primary">Jumlah Keluarga</h5>
                                                        <h5 class="card-title font-14 text-primary">919.170</h5>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- End col -->
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-4"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-5">
                                                        <span class="action-icon badge badge-primary-inverse mr-0"><i class="feather icon-user"></i></span>
                                                    </div>
                                                    <div class="col-7 text-right">
                                                        <h5 class="card-title font-14 text-primary">Jumlah Individu</h5>
                                                        <h5 class="card-title font-14 text-primary">2.858.700</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- End col -->
                                    <!-- Start col -->
                                    
                                    <!-- End col -->
                                </div>  
                                <div class="card m-b-40">
                                    <div class="card-header">                                
                                        <h5 class="card-title mb-0">Rekapitulasi Per Desil</h5>
                                    </div>
                                    
                                </div>                    
                                <div class="card-body">                                
                                 
                                    <div class="row mb-5">
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-3"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    
                                                    <div class="col-12 ">
                                                        <h5 class="card-title font-14 text-danger">Desil 1</h5>
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-users"></i> Keluarga : 78.139</h5>
                                    
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-user"></i> Individu : 258.172</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col -->
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-3"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    
                                                    <div class="col-12 ">
                                                        <h5 class="card-title font-14 text-danger">Desil 2</h5>
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-users"></i> Keluarga : 96.193</h5>
                                    
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-user"></i> Individu : 330.744</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col -->
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-3"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    
                                                    <div class="col-12 ">
                                                        <h5 class="card-title font-14 text-danger">Desil 3</h5>
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-users"></i> Keluarga : 122.622</h5>
                                    
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-user"></i> Individu : 386.539</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col -->
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-3"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    
                                                    <div class="col-12 ">
                                                        <h5 class="card-title font-14 text-success">Desil 4</h5>
                                                        <h5 class="card-title font-14 text-success"><i class="feather icon-users"></i> Keluarga : 124.298</h5>
                                    
                                                        <h5 class="card-title font-14 text-success"><i class="feather icon-user"></i> Individu : 398.775</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col -->
                                </div>                      
                                <div class="card-body">                                
                                 
                                    <div class="row mb-5">
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-3"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    
                                                    <div class="col-12 ">
                                                        <h5 class="card-title font-14 text-success">Desil 5</h5>
                                                        <h5 class="card-title font-14 text-success"><i class="feather icon-users"></i> Keluarga : 132.140</h5>
                                    
                                                        <h5 class="card-title font-14 text-success"><i class="feather icon-user"></i> Individu : 391.395</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col -->
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-3"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    
                                                    <div class="col-12 ">
                                                        <h5 class="card-title font-14 text-success">Desil 6-10</h5>
                                                        <h5 class="card-title font-14 text-success"><i class="feather icon-users"></i> Keluarga : 323.259</h5>
                                    
                                                        <h5 class="card-title font-14 text-success"><i class="feather icon-user"></i> Individu : 1.030.982</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col -->
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-3"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    
                                                    <div class="col-12 ">
                                                        <h5 class="card-title font-14 text-danger">Belum Pemeringkatan</h5>
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-users"></i> Keluarga : 42.378</h5>
                                    
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-user"></i> Individu : 61.089</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col -->
                                    <!-- Start col -->
                                    <div class="col-md-6 col-lg-6 col-xl-3"">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    
                                                    <div class="col-12 ">
                                                        <h5 class="card-title font-14 text-danger">Nonaktif</h5>
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-users"></i> Keluarga : 141</h5>
                                    
                                                        <h5 class="card-title font-14 text-danger"><i class="feather icon-user"></i> Individu : 1.004</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col -->
                                </div>                      
                            </div>
                            </div>
                            <!-- Dashboard End -->                        
                        </div>                        
                    </div>
                    <!-- End col -->
                     
                </div>
                <!-- End row -->  
                                 
            </div>               
 @endsection
