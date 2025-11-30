@extends('layouts/app')
@section('breadcrumb')
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Data Penerima Bansos </h4>
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
<form action="{{route('bansos.store')}}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6>Formulir Tambah Data Penerima Bansos</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control" name="nik">
                </div>
            
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <label>Apakah Mendapatkan Bantuan PKH?</label>
                <div class="form-group">
                    
                    <label>
                        <input type="radio" name="pkh" value="1" required> Ya
                    </label>
                    <label>
                        <input type="radio" name="pkh" value="0" required> Tidak
                    </label>
                </div>
                <label>Apakah Mendapatkan Bantuan Sembako?</label>
                <div class="form-group">
                    
                    <label>
                        <input type="radio" name="sembako" value="1" required> Ya
                    </label>
                    <label>
                        <input type="radio" name="sembako" value="0" required> Tidak
                    </label>
                </div>
                <label>Apakah Mendapatkan Bantuan PBI?</label>
                <div class="form-group">
                    
                    <label>
                        <input type="radio" name="pbi" value="1" required> Ya
                    </label>
                    <label>
                        <input type="radio" name="pbi" value="0" required> Tidak
                    </label>
                </div>
                <label>Apakah Mendapatkan Bantuan YAPI?</label>
                <div class="form-group">
                    
                    <label>
                        <input type="radio" name="yapi" value="1" required> Ya
                    </label>
                    <label>
                        <input type="radio" name="yapi" value="0" required> Tidak
                    </label>
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