<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Import Str class

class Achievement extends Model
{
    use HasFactory;

    protected $keytype = 'string';
    protected $table = 'achievements';
    protected $primaryKey = 'id';
    public $incrementing = false; // Disable auto-increment

    protected $fillable = [
        'id',
        'name',
        'image',
        'year',
        'started_date',
        'ended_date',
        'position',
        'role',
        'type',
        'level',
        'created_by',
        'updated_by',
        'active'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid(); // Generate UUID when creating
        });
    }

    protected $casts = [
        'started_date' => 'date',
        'ended_date' => 'date',
    ];
}