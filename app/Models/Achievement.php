<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $table = 'achievements';
    protected $fillable = [
        'year',
        'name',
        'image',
        'level',
        'start_date',
        'end_date',
        'position',
        'role',
        'type',
        'created_by',
        'updated_by',
        'active'
    ];

    protected $casts = [
        'level' => 'string', // Optional: Cast the enum to a string
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}