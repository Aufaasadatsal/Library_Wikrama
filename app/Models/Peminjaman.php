<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjamen';

    protected $fillable = [
        'nama_peminjam',
        'nis',
        'gambar',
        'tanggal_pinjam',
    ];

    protected $casts = [
        'tanggal_pinjam' => 'datetime',
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
