<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kecamatan = Kecamatan::orderBy('kecamatan', 'asc')->get();
        return view('kecamatan.index',['kecamatan'=>$kecamatan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kecamatan = Kecamatan::all();
        return view ('kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kecamatan'=>'required',
            'kelurahan'=>'required',
            'desa'=>'required',
            'kodepos'=>'required',
        ],[
            'kecamatan.required' => 'Nama Kecamatan Wajib Diisi',
            'kelurahan.required' => 'Jumlah Kelurahan Wajib Diisi',
            'desa.required' => 'Jumlah Desa Wajib Diisi',
            'kodepos.required' => 'Kode Pos Wajib Diisi',
        ]);
        
        $data =[
            'kecamatan' => $request->input('kecamatan'),
            'kelurahan' => $request->input('kelurahan'),
            'desa' => $request->input('desa'),
            'kodepos' => $request->input('kodepos'),
        ];
        Kecamatan::create($data);
        return redirect('kecamatan')->with('success','Data Kecamatan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodekecamatan)
    {
        //
        $data = Kecamatan::where('kodekecamatan',$kodekecamatan)->first();
        return view('kecamatan.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodekecamatan)
    {
        //
        $request->validate([
            'kecamatan'=>'required',
            'kelurahan'=>'required',
            'desa'=>'required',
            'kodepos'=>'required',
        ],[
            'kecamatan.required' => 'Nama Kecamatan Wajib Diisi',
            'kelurahan.required' => 'Jumlah Kelurahan Wajib Diisi',
            'desa.required' => 'Jumlah Desa Wajib Diisi',
            'kodepos.required' => 'Kode Pos Wajib Diisi',
        ]);
        
        $data =[
            'kecamatan' => $request->input('kecamatan'),
            'kelurahan' => $request->input('kelurahan'),
            'desa' => $request->input('desa'),
            'kodepos' => $request->input('kodepos'),
        ];

        Kecamatan::where('kodekecamatan',$kodekecamatan)->update($data);
        return redirect('kecamatan')->with('success','Data Kecamatan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodekecamatan)
    {
        //
        $data = Kecamatan::where('kodekecamatan',$kodekecamatan)->first();
        Kecamatan::where('kodekecamatan',$kodekecamatan)->delete();
        return redirect('kecamatan')->with('success','Data Kecamatan Berhasil Dihapus');
    }
}
