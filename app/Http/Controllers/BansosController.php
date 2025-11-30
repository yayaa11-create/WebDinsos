<?php

namespace App\Http\Controllers;

use App\Models\Bansos;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bansos = Bansos::all();
        return view('bansos.index',['bansos'=>$bansos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $bansos = Bansos::all();
        return view ('bansos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nik'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'pkh'=>'required',
            'sembako'=>'required',
            'pbi'=>'required',
            'yapi'=>'required',
        ],[
            'nik.required' => 'Nomor NIK Wajib Diisi',
            'nama.required' => 'Nama Lengkap Wajib Diisi',
            'alamat.required' => 'Alamat Wajib Diisi',
            'pkh.required' => 'Apakah Mendapatkan Bantuan PKH?',
            'sembako.required' => 'Apakah Mendapatkan Bantuan Sembako?',
            'pbi.required' => 'Apakah Mendapatkan Bantuan PBI?',
            'yapi.required' => 'Apakah Mendapatkan Bantuan YAPI?',
        ]);
        
        $data =[
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'pkh' => $request->input('pkh'),
            'sembako' => $request->input('sembako'),
            'pbi' => $request->input('pbi'),
            'yapi' => $request->input('yapi'),
        ];
        Bansos::create($data);
        return redirect('bansos')->with('success','Data Bansos Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bansos $bansos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodebansos)
    {
        //
        $data = Bansos::where('kodebansos',$kodebansos)->first();
        return view('bansos.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodebansos)
    {
        //
        $request->validate([
            'nik'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'pkh'=>'required',
            'sembako'=>'required',
            'pbi'=>'required',
            'yapi'=>'required',
        ],[
            'nik.required' => 'Nomor NIK Wajib Diisi',
            'nama.required' => 'Nama Lengkap Wajib Diisi',
            'alamat.required' => 'Alamat Wajib Diisi',
            'pkh.required' => 'Apakah Mendapatkan Bantuan PKH?',
            'sembako.required' => 'Apakah Mendapatkan Bantuan Sembako?',
            'pbi.required' => 'Apakah Mendapatkan Bantuan PBI?',
            'yapi.required' => 'Apakah Mendapatkan Bantuan YAPI?',
        ]);
        
        $data =[
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'pkh' => $request->input('pkh'),
            'sembako' => $request->input('sembako'),
            'pbi' => $request->input('pbi'),
            'yapi' => $request->input('yapi'),
        ];

        Bansos::where('kodebansos',$kodebansos)->update($data);
        return redirect('bansos')->with('success','Data Bansos Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodebansos)
    {
        //
        $data = Bansos::where('kodebansos',$kodebansos)->first();
        Bansos::where('kodebansos',$kodebansos)->delete();
        return redirect('bansos')->with('success','Data Bansos Berhasil Dihapus');
    }
}
