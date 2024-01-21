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
        'user_id',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stationData()
    {
        return $this->hasMany(StationData::class, 'station_id');
    }
}
