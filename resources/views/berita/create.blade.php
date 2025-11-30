@extends('layouts/app')
@section('breadcrumb')
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Berita Terbaru</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Berita Terbaru</a></li>
                            </ol>
                        </div>
                    </div>
                </div>          
            </div>
@endsection
@section('content')
<form action="{{route('berita.store')}}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6>Formulir Tambah Berita </h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="title">
                    </div>


                    <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
                    </div>
            
                    <div class="form-group">
                    <label for="foto">Upload Foto</label>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                    </div>

                    <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary"><i class="feather icon-save mr-2"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection