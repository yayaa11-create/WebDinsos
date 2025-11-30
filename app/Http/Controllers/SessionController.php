<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SessionController extends Controller
{
    //
    public function index()
    {
        return view('sesi.index');
    }

    // Menangani proses login
    public function login(Request $request)
    {
    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    // Proses login
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        
        // Setelah login, cek role user
        if (Auth::user()->role === 'admin') {
            return redirect()->route('dashboard');
        }


        // Jika yang login adalah user biasa, arahkan ke landing page atau halaman khusus user
        return redirect()->route('landing.landing'); // Arahkan ke landing page untuk user biasa
    }

    // Jika login gagal
    return back()->withErrors(['email' => 'Login gagal. Cek email dan password']);
    }

    // Menangani logout
    public function logout()
    {
        Auth::logout(); // Logout user
        return redirect()->route('login'); // Redirect ke halaman login
    }
}
