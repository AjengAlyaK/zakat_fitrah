<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Ajeng Alya Kartika Sari (217006056)

class muzakki extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_muzakki', 'jumlah_tanggungan', 'kategori_mustahik_id', 'keterangan2'
    ];

    public function bayar_zakat()
    {
        return $this->hasOne(bayar_zakat::class);
    }

    public function kategori_mustahik()
    {
                            // nama model reference
        return $this->belongsTo(kategori_mustahik::class);
        // return $this->belongsTo(classRoom::class, 'foreign_key', 'other_key');
    }

    public function mustahik_warga()
    {
        return $this->hasOne(mustahik_warga::class);
    }
}
