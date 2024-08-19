<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Ajeng Alya Kartika Sari (217006056) 

class mustahik_lainnya extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'kategori_mustahik_id'
    ];

    public function kategori_mustahik()
    {
                            // nama model reference
        return $this->belongsTo(kategori_mustahik::class);
    }
}
