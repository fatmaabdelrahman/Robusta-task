<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'bus_id', 'departure_time', 'arrival_time'];

    public function cities()
    {
        return $this->belongsToMany(City::class, 'trip_cities', 'trip_id', 'city_id');
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function stations()
    {
        return $this->hasMany(TripCity::class);
    }
}
