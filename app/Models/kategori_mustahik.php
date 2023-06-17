<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// Ajeng Alya Kartika Sari (217006056)

class kategori_mustahik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori', 'jumlah_hak', 'hak_uang'
    ];

    public function muzakki()
    {
        return $this->hasMany(muzakki::class, 'kategori_mustahik_id', 'id');
    }

    public function mustahik_lainnya()
    {
        return $this->hasMany(muzakki::class, 'kategori_mustahik_id', 'id');
    }

    public function mustahik_warga()
    {
        return $this->hasMany(muzakki::class, 'kategori_mustahik_id', 'id');
    }
}
