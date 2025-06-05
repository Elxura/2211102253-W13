<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    
    protected $table = 'warehouse';
    protected $primaryKey = 'id_stok';
    
    protected $fillable = [
        'nama_barang',
        'kategori',
        'harga',
        'stok_tersedia',
        'image',
        'stok_awal',
        'stok_berkurang'
    ];
    
    protected $casts = [
        'harga' => 'decimal:2',
        'stok_tersedia' => 'integer',
        'stok_awal' => 'integer',
        'stok_berkurang' => 'integer'
    ];
    
    // Accessor for formatted price
    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
    
    // Accessor for image URL
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('Asset/about/kopi1.jpg'); // Default image
    }
    
    // Check if item is available
    public function getIsAvailableAttribute()
    {
        return $this->stok_tersedia > 0;
    }
}