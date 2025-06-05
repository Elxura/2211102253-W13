<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // agar bisa menggunakan fitur authentication
use Illuminate\Notifications\Notifiable;

class Register extends Authenticatable
{   
    use HasFactory, Notifiable;

    // Tentukan nama tabel. Secara default Laravel menganggap nama tabel jamak (plural), 
    // tapi di sini kita pakai "register" (sesuai migrasi Anda).
    protected $table = 'register';

    // Kolom-kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'email',
        'password',
    ];

    // Agar password otomatis di-hash saat di-set
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // Lewati atribut password ketika model di-serialisasi (opsional)
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
