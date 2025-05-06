<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'topik',
        'deskripsi_singkat',
        'gambar',
        'keterangan',
        'tanggal_update', // Tambahkan tanggal_update
    ];
}