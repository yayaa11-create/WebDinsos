<?php

namespace App\Http\Controllers;

use App\Models\Sosped;
use App\Models\Berita;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sosped = Sosped::all();
        $berita = Berita::latest()->take(6)->get();
        return view('landing.landing',['sosped'=>$sosped, 'berita'=>$berita]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Sosped $sosped)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sosped $sosped)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sosped $sosped)
    {
        //
    }
}
