<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'keranjang';

    // Primary key
    protected $primaryKey = 'id_keranjang';

    // Aktifkan timestamps
    public $timestamps = true;

    // Kolom yang boleh di‐mass assign
    protected $fillable = [
        'id_stok',
        'nama_makanan',
        'harga_makanan',
        'jumlah',
        'nomer_meja',
    ];
}
