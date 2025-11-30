@extends('layouts/app')
@section('breadcrumb')
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Sosial Pedia</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Sosial Pedia</a></li>
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
                                <h5 class="card-title">Sosial Pedia</h5>
                            </div>
                            <div class="card-body">
                            <a href="{{route('sosped.create')}}" class="btn btn-outline-primary" ><i class="feather icon-plus mr-2"></i>Add data</a>
                                <div class="table-responsive">
                                    <table class="table foo-filtering-table" data-filtering="true" id="edit-btn">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Deksripsi</th> 
                                            <th>Aksi</th>                                                 
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1?>
                                        @foreach($sosped as $sosped)
                                          <tr>
                                              <td>{{$no++}}</td>
                                              <td>{{$sosped->title}}</td>
                                              <td>{{$sosped->deskripsi}}</td>
                                              <td>
                                            <a href="{{url('sosped/'.$sosped->kodesosped.'/edit')}}" class="btn btn-outline-warning" ><i class="feather icon-upload mr-2"></i>Edit</a>
                                            <form action="{{url('sosped/'.$sosped->kodesosped)}}" method="post" style="display: inline-block">
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