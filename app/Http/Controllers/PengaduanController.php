<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('landing.pengaduan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'klasifikasi' => 'required',
            'title' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'instansi' => 'required',
            'kategori' => 'required',
            'foto'=>'required |mimes:jpeg,jpg,png,gif',
        ],[
            'klasifikasi.required' => 'Klasifikasi Laporan Wajib Diisi',
            'title.required' => 'Judul Laporan Wajib Diisi',
            'deskripsi.required' => 'Isi Laporan Wajib Diisi',
            'tanggal.required' => 'Tanggal Kejadian Wajib Diisi',
            'lokasi.required' => 'Lokasi Kejadian Wajib Diisi',
            'instansi.required' => 'Instansi Tujuan Wajib Diisi',
            'kategori.required' => 'Kategori Laporan Wajib Diisi',
            'foto.required' => 'Foto Wajib Diisi',
            'foto.mimes' => 'Foto Diperbolehkan Berekstensi jpeg, jpg, png, gif',
        ]);
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis'). "." .$foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $data =[
            'klasifikasi' => $request->input('klasifikasi'),
            'title' => $request->input('title'),
            'deskripsi' => $request->input('deskripsi'),
            'tanggal' => $request->input('tanggal'),
            'lokasi' => $request->input('lokasi'),
            'instansi' => $request->input('instansi'),
            'kategori' => $request->input('kategori'),
            'foto' => $foto_nama,
        ];

        Laporan::create($data);
        return redirect('pengaduan')->with('success','Laporan Telah Terkirim')->with('reset_form', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
