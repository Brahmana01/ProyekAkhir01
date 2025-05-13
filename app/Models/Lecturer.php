<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'name',
        'bachelor_degree',
        'master_degree',
        'doctor_degree',
        'status',
        'experiences',
        'email',
        'image',
        'created_by',
        'updated_by',
        'active'
    ];

    // Relasi dengan tabel User (untuk created_by dan updated_by)
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}