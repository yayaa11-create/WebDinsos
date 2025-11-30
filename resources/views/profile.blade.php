@extends('layouts/app')
@section('breadcrumb')
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Admin Account</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                                <li class="breadcrumb-item"><a href="#">Admin Account</a></li>
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
                                <div class="card m-b-40">
                                    <div class="card-header">                                
                                        <h5 class="card-title mb-0">Profile</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="profilebox py-4 text-center">
                                            <img src="{{asset('assets/images/users/girl.svg')}}" class="img-fluid mb-3" alt="profile">
                                            <div class="profilename">
                                                <h5>Admin</h5>
                                                <p class="text-muted my-3">Alya Azmi Anjani</p>
                                            </div>
                                            <div class="button-list">
                                                <a href="https://www.facebook.com/profile.php?id=100079266250087" class="btn btn-primary-rgba font-18"><i class="feather icon-facebook"></i></a>
                                                <a href="https://github.com/yayaa11-create" class="btn btn-info-rgba font-18"><i class="feather icon-github"></i></a>
                                                <a href="https://www.instagram.com/urfav.yaya11?igsh=MWE2d2d0ZXFudTRmcw==" class="btn btn-danger-rgba font-18"><i class="feather icon-instagram"></i></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">                                
                                <div class="row mb-5">
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="order-primary-detail mb-4">
                                        <h6>Class</h6>
                                        <p class="mb-0">XII-PPL 1</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="order-primary-detail mb-4">
                                        <h6>Address</h6>
                                        <p class="mb-0">Pasirwangi, Garut</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="order-primary-detail mb-4">
                                        <h6>Email ID</h6>
                                        <p class="mb-0">yboboboy5@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="order-primary-detail mb-4">
                                        <h6>Contact No</h6>
                                        <p class="mb-0">+62 812 2427 6823</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class=" text-center">
                                            <button type="button" class="btn btn-danger-rgba my-1"><i class="feather icon-log-out mr-2"></i><a href="{{route('logout')}}" class="text-dark">Logout</a></button>
                                        </div>
                                    </div>
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