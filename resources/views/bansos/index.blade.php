@extends('layouts/app')
@section('breadcrumb')
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Data Penerima Bansos</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data DTSEN</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Penerima Bansos</a></li>
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
                                <h5 class="card-title">Data Penerima Bantuan Sosial 2025</h5>
                            </div>
                            <div class="card-body">
                            <a href="{{route('bansos.create')}}" class="btn btn-outline-primary" ><i class="feather icon-plus mr-2"></i>Add data</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="edit-btn">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th> 
                                            <th>Alamat</th>                                                 
                                            <th>PKH</th>                                                 
                                            <th>Sembako</th>                                                 
                                            <th>PBI</th>                                                 
                                            <th>YAPI</th>                                                 
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1?>
                                        @foreach($bansos as $bansos)
                                          <tr>
                                              <td>{{$no++}}</td>
                                              <td>{{$bansos->nik}}</td>
                                              <td>{{$bansos->nama}}</td>
                                              <td>{{$bansos->alamat}}</td>
                                              <td>{{ $bansos->pkh ? 'Ya' : 'Tidak' }}</td>
                                              <td>{{ $bansos->sembako ? 'Ya' : 'Tidak' }}</td>
                                              <td>{{ $bansos->pbi ? 'Ya' : 'Tidak' }}</td>
                                              <td>{{ $bansos->yapi ? 'Ya' : 'Tidak' }}</td>
                                              <td>
                                            <a href="{{url('bansos/'.$bansos->kodebansos.'/edit')}}" class="btn btn-outline-warning" ><i class="feather icon-upload mr-2"></i>Edit</a>
                                            <form action="{{url('bansos/'.$bansos->kodebansos)}}" method="post" style="display: inline-block">
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