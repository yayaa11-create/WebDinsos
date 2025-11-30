<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class MoreController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('landing.more',['berita'=>$berita]);
    }
}
