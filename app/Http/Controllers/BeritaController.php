<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $berita = Berita::all();
        return view('berita.index',['berita'=>$berita]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $berita = Berita::all();
        return view ('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'tanggal'=>'required',
            'foto'=>'required |mimes:jpeg,jpg,png,gif',
        ],[
            'title.required' => 'Judul Wajib Diisi',
            'tanggal.required' => 'Tanggal Wajib Diisi',
            'foto.required' => 'Foto Wajib Diisi',
            'foto.mimes' => 'Foto Diperbolehkan Berekstensi jpeg, jpg, png, gif',
        ]);
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis'). "." .$foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $data =[
            'title' => $request->input('title'),
            'tanggal' => $request->input('tanggal'),
            'foto' => $foto_nama,
        ];
        Berita::create($data);
        return redirect('berita')->with('success','Berita Terbaru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodeberita)
    {
        //
        $data = Berita::where('kodeberita',$kodeberita)->first();
        return view('berita.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodeberita)
    {
        //
        $request->validate([
            'title'=>'required',
            'tanggal'=>'required',
        ],[
            'title.required' => 'Judul Wajib Diisi',
            'tanggal.required' => 'Tanggal Wajib Diisi',
        ]);

        $data =[
            'title' => $request->input('title'),
            'tanggal' => $request->input('tanggal'),
        ];

        if($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'mimes:jpeg,jpg,png,gif'
            ],[
                'foto.mimes' => 'Foto Yang Diperbolehkan Sistem Berekstensi jpeg, jpg,png,gif'
            ]); 
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis'). "." .$foto_ekstensi;
            $foto_file->move(public_path('foto'),$foto_nama);

            $data_foto = Berita::where('kodeberita',$kodeberita)->first();
            File::delete(public_path('foto').'/'.$data_foto->foto);

            $data['foto'] = $foto_nama;
        }

        Berita::where('kodeberita',$kodeberita)->update($data);
        return redirect('berita')->with('success','Berita Terbaru Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodeberita)
    {
        //
        $data = Berita::where('kodeberita',$kodeberita)->first();
        File::delete(public_path('foto').'/'.$data->foto);
        Berita::where('kodeberita',$kodeberita)->delete();
        return redirect('berita')->with('success','Berita Terbaru Berhasil Dihapus');
    }
}
