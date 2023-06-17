<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Ajeng Alya Kartika Sari (217006056)

class bayar_zakat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_KK', 'muzakki_id', 'jumlah_tanggungan', 'jenis_bayar', 'jumlah_tanggunganyangdibayar', 'bayar_beras', 'bayar_uang'
    ];

    public function muzakki()
    {
        return $this->belongsTo(muzakki::class, 'muzakki_id', 'id');
    
    }
}
