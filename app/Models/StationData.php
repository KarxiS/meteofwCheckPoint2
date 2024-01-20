<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationData extends Model
{
    use HasFactory;
    protected $table = 'station_data';
    protected $fillable = ['station_id', 'temperature', 'humidity'];

    public function station()
    {
        return $this->belongsTo('App\Models\Stanica', 'station_id');
    }
}
