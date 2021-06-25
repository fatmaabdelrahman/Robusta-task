<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seat extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['bus_id', 'seat_number', 'is_available'];

    //Local scope of  Seat availability
    public function scopeAvailable($q)
    {
        return $q->where('is_available', 1);
    }


    //Eloquent: Relationships

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }


}
