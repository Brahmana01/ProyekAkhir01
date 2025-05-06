<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemitraan extends Model
{
    use HasFactory;

    protected $table = 'kemitraan'; // Pastikan sesuai dengan nama tabel di database
    protected $fillable = [
        'nama_kemitraan',
        'bidang_kemitraan',
        'gambar',
        'deskripsi',
    ];
}