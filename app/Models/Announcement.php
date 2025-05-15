<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table = 'announcements';
    protected $fillable = [
        'name',
        'description',
        'file',
        'status',
        'created_by',
        'updated_by',
        'active'
    ];

    protected $casts = [
        'status' => 'string', // Optional: Cast the enum to a string
    ];
}