<?php


namespace App\Http\Traits;

use App\Http\Resources\UserResource;
use App\Models\Trip;
use Illuminate\Http\Request;

trait BookingOperations
{

    public function booking($request)
    {
        $trip = Trip::whereHas('stations', function ($query) {
            $query->whereIn('city_id',[\request('start_from'),\request('end_to')]);
        })->first();
        dd($trip);


    }


}
