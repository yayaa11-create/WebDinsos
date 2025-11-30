@extends('layouts/app')
@section('breadcrumb')
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Laporan Pengaduan</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
                                <li class="breadcrumb-item"><a href="#">Laporan Pengaduan</a></li>
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
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Laporan Pengaduan</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="edit-btn">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Klasifikasi</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Tanggal</th>                                                                                                
                                            <th>Lokasi</th>                                                                                                
                                            <th>Instansi</th>                                                                                                
                                            <th>Kategori</th>                                                                                                
                                            <th>Lampiran</th>                                                                                                
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1?>
                                        @foreach($laporan as $laporan)
                                          <tr>
                                              <td>{{$no++}}</td>
                                              <td>
                                                {{
                                                    [
                                                        'A' => 'PENGADUAN',
                                                        'B' => 'ASPIRASI',
                                                        'C' => 'PERMINTAAN INFORMASI',
                                                    ][$laporan->klasifikasi] ?? '-'
                                                }}
                                              </td>

                                              <td>{{$laporan->title}}</td>                               
                                              <td>{{$laporan->deskripsi}}</td>                               
                                              <td>{{$laporan->tanggal}}</td>                                                                                       
                                              <td>{{$laporan->lokasi}}</td>                                                                                       
                                              <td>{{$laporan->instansi}}</td>                                                                                       
                                              <td>
                                                {{
                                                    [
                                                        'A' => 'Undangan',
                                                        'B' => 'Transfer dari Bank',
                                                        'C' => 'Topik Lainnya',
                                                        'D' => 'Topik Khusus',
                                                        'E' => 'Tindak Pidana',
                                                        'F' => 'Tidak Dapat Email Balasan Pada Pendaftaran on-line',
                                                        'G' => 'Tidak Aktif',
                                                        'H' => 'Tidak Ada Balasan SMS Gateway',
                                                        'I' => 'Testing Kategori',
                                                        'J' => 'Tenaga Perpustakaan',
                                                    ][$laporan->kategori] ?? '-'
                                                }}
                                              </td>
                                                                                      
                                              <td>
                                                <a href="{{asset('foto/'.$laporan->foto)}}" target="_blank" class="tg-btn tg-btn-two">
                                                Lihat Lampiran
                                                </a>
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