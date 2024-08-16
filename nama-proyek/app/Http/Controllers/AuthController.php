<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Ambil input username dan password
        $credentials = $request->only('username', 'password');

        // Cek kredensial
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, redirect ke halaman input data
            return redirect()->route('data-input');
        } else {
            // Jika gagal, kembali ke halaman login dengan pesan error
            return redirect()->back()->withErrors('Username atau password salah');
        }
    }
}
