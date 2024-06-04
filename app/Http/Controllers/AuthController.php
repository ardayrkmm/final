<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // public function formLogin()
    // {
    //     return view('pages.landing.auth.login');
    // }
    // public function formRegister()
    // {
    //     return view('pages.landing.auth.register');
    // }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        // Periksa apakah pengguna ditemukan dan password sesuai
        try {
            if (Auth::attempt($credentials)) {
                // Otentikasi berhasil
                return redirect()->route('home');
            } else {
                // Otentikasi gagal
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);
            }
        } catch (\Exception $e) {
            // Log pengecualian
            Log::error('Exception during login: ' . $e->getMessage());
            // Tampilkan pesan kesalahan umum
            return back()->withErrors([
                'email' => 'An unexpected error occurred. Please try again later.',
            ]);
        }
    }
    public function showVerificationNotice()
    {
        return view('pages.landing.auth.verifikasi');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            // Menambahkan validasi untuk role
        ]);

        // Membuat user baru
        try {

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => 'admin', // Menambahkan role
            ]);

            Log::info('User baru berhasil dibuat.');
            event(new Registered($user));
            Auth::login($user);

            return redirect()->route('home')->with('status', 'Pendaftaran berhasil. Silakan periksa email Anda untuk verifikasi.');
        } catch (\Exception $e) {
            Log::error('Error creating user: ' . $e->getMessage());
            return redirect()->route('home')->withErrors([
                'register' => 'Terjadi kesalahan saat mendaftar. Silakan coba lagi.',
            ])->withInput($request->except('password'));
        }
    }




    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }


    // public function activate($code, User $user)
    // {
    //     if ($user->activateAccount($code)) {
    //         return "Activated!";
    //     }
    //     return "Fail";
    // }
}
