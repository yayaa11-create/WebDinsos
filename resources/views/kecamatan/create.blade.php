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
<form action="{{route('kecamatan.store')}}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6>Formulir Tambah Data Kecamatan</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label>Nama Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan">
                    </div>
            
                    <div class="form-group">
                    <label>Jumlah Kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan">
                    </div>

                    <div class="form-group">
                    <label>Jumlah Desa</label>
                    <input type="text" class="form-control" name="desa">
                    </div>

                    <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" class="form-control" name="kodepos">
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