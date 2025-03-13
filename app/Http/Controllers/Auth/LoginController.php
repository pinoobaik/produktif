<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    // Override fungsi login
    public function login(Request $request)
    {
        // Validasi input username/email dan password
        $this->validate($request, [
            'username' => 'required|string', // Bisa berupa username atau email
            'password' => 'required|string|min:6',
        ]);

        // Cek apakah input adalah email atau username
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Data login yang digunakan untuk proses autentikasi
        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];

        // Proses login menggunakan Auth
        if (Auth::attempt($login)) {
            return redirect()->route('home'); // Redirect ke halaman utama jika sukses
        }

        // Jika gagal, redirect kembali dengan pesan error
        return redirect()->route('login')->with('error', 'Username/Email atau Password salah!');
    }
}
