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
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{$err}}</p>
@endforeach
@endif
<form action="{{url('sosped/'.$data->kodesosped)}}" method="post" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Edit Data Sosial Pedia</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                </div>
            
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{$data->deskripsi}}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-outline-primary"><i class="feather icon-save mr-2"></i> Save</button>
            </div>
            </div>
        </div>
    </div>
</form>

@endsection