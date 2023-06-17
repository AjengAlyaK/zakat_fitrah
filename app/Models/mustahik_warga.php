<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// Ajeng Alya Kartika Sari (217006056)

class mustahik_warga extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','nama', 'kategori', 'hak', 'kategori_mustahik_id', 'hak_uang'
    ];

    public function kategori_mustahik()
    {
                            // nama model reference
        return $this->belongsTo(kategori_mustahik::class);
        // return $this->belongsTo(classRoom::class, 'foreign_key', 'other_key');
    }

    public function muzakki()
    {
        return $this->belongsTo(muzakki::class, 'muzakki_id', 'id');
    
    }
}
