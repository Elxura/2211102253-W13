<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Tampilkan form pendaftaran (register).
     */
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    /**
     * Proses data pendaftaran.
     */
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email'                 => 'required|email|unique:register,email',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan user baru
        Register::create([
            'email'    => $request->email,
            'password' => $request->password, // akan otomatis di-hash oleh model
        ]);

        // Setelah berhasil daftar, redirect ke halaman login atau dashboard
        return redirect()->route('login.form')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
