@extends('layouts/app')
@section('breadcrumb')
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Data Kecamatan</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Geografis</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Kecamatan</a></li>
                            </ol>
                        </div>
                    </div>
                </div>          
            </div>
@endsection
@section('content')

@if(session('success'))
<p class="alert alert-success">{{session('success')}}</p>
@endif
<div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Data Kecamatan</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Data 42 Kecamatan di Kabupaten Garut</h6>
                            <a href="{{route('kecamatan.create')}}" class="btn btn-outline-primary" ><i class="feather icon-plus mr-2"></i>Add data</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="edit-btn">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Nama Kecamatan</th>
                                            <th>Kelurahan</th> 
                                            <th>Desa</th>                                                 
                                            <th>Kode Pos</th>                                                 
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1?>
                                        @foreach($kecamatan as $kecamatan)
                                          <tr>
                                              <td>{{$no++}}</td>
                                              <td>{{$kecamatan->kecamatan}}</td>
                                              <td>{{$kecamatan->kelurahan}}</td>
                                              <td>{{$kecamatan->desa}}</td>
                                              <td>{{$kecamatan->kodepos}}</td>
                                              <td>
                                            <a href="{{url('kecamatan/'.$kecamatan->kodekecamatan.'/edit')}}" class="btn btn-outline-warning" ><i class="feather icon-upload mr-2"></i>Edit</a>
                                            <form action="{{url('kecamatan/'.$kecamatan->kodekecamatan)}}" method="post" style="display: inline-block">
                                            @csrf 
                                            @method('DELETE')
                                            <button onclick="return confirm ('Apakah Anda Ingin Menghapus Data ?')" class="btn btn-outline-danger" ><i class="feather icon-trash-2 mr-2"></i>Delete</Delete>
                                            </form>
                                            </td>                              
                                          </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>

@endsection