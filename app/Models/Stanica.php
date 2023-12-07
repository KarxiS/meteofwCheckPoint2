<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stanica extends Model
{
    use HasFactory;
    protected $table = 'stanice';

    protected $fillable = [
        'name',
        'description',
        'api_link',
        'password',
    ];


    protected $casts = [
        'added_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function ($stanica) {
            $stanica->added_at = now();
        });
    }
}
