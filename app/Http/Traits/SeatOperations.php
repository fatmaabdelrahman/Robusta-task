<?php


namespace App\Http\Traits;

use App\Http\Resources\UserResource;
use App\Models\Trip;
use Illuminate\Http\Request;

trait SeatOperations
{

    public function userTripAvailableSeats($request)
    {
        $trips = Trip::whereHas('stations', function ($query) {
            $query->whereIn('city_id', [\request('start_from'), \request('end_to')]);
        })->get();
        $trip = $this->validateTrip($trips);
        $available_seats = $this->availableBusSeats($trip);
        return $available_seats;


    }

}
