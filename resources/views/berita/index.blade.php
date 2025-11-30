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
    @if(session('success'))
        <p class="alert alert-success">{{session('success')}}</p>
    @endif
    <div class="col-lg-12">
        <a href="{{route('berita.create')}}" class="btn btn-outline-primary" ><i class="feather icon-plus mr-2"></i>Add data</a>
        <div class="card-group">  
            <div class="row">  
                @foreach($berita as $berita)
                    <div class="col-md-4">  
                        <div class="card m-b-30"> 
                            @if ($berita->foto)
                                <img class="card-img-top" src="{{url('foto').'/'.$berita->foto}}" alt="Card image cap">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title font-18">{{$berita->title}}</h5>
                                <p>{{$berita->tanggal}}</p>
                                <a href="{{url('berita/'.$berita->kodeberita.'/edit')}}" class="btn btn-outline-warning" ><i class="feather icon-upload mr-2"></i>Edit</a>
                                <form action="{{url('berita/'.$berita->kodeberita)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm ('Apakah Anda Ingin Menghapus Berita ?')" class="btn btn-outline-danger" ><i class="feather icon-trash-2 mr-2"></i>Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>  
                    @if ($loop->iteration % 3 == 0)  
                </div>
                <div class="row">
                    @endif
                @endforeach
            </div> 
         </div>  
        </div>
@endsection