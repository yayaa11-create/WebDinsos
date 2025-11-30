<?php

namespace App\Http\Controllers;

use App\Models\Sosped;
use Illuminate\Http\Request;

class SospedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sosped = Sosped::orderBy('title', 'asc')->get();
        return view('sosped.index',['sosped'=>$sosped]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $sosped = Sosped::all();
        return view ('sosped.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'deskripsi'=>'required',
        ],[
            'title.required' => 'Judul Wajib Diisi',
            'deskripsi.required' => 'Deskripsi Wajib Diisi',
        ]);
        
        $data =[
            'title' => $request->input('title'),
            'deskripsi' => $request->input('deskripsi'),
        ];
        Sosped::create($data);
        return redirect('sosped')->with('success','Sosial Pedia Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sosped $sosped)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodesosped)
    {
        //
        $data = Sosped::where('kodesosped',$kodesosped)->first();
        return view('sosped.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodesosped)
    {
        //
        $request->validate([
            'title'=>'required',
            'deskripsi'=>'required',
        ],[
            'title.required' => 'Judul Wajib Diisi',
            'deskripsi.required' => 'Deskripsi Wajib Diisi',
        ]);

        $data =[
            'title' => $request->input('title'),
            'deskripsi' => $request->input('deskripsi'),
        ];

        Sosped::where('kodesosped',$kodesosped)->update($data);
        return redirect('sosped')->with('success','Sosial Pedia Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodesosped)
    {
        //
        $data = Sosped::where('kodesosped',$kodesosped)->first();
        Sosped::where('kodesosped',$kodesosped)->delete();
        return redirect('sosped')->with('success','Sosial Pedia Berhasil Dihapus');
    }
}
