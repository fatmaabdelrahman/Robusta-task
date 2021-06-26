<?php


namespace App\Http\Traits;

use App\Http\Resources\UserResource;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

trait SeatOperations
{

    public function userTripAvailableSeats($request)
    {
        $trips = Trip::whereHas('stations', function ($query) {
            $query->whereIn('city_id', [\request('start_from'), \request('end_to')]);
        })->get();
        $trip = $this->validateTrip($trips);
        $available_seats = $this->seatsList($trip);
        return $available_seats;

    }

    public function seatsList($trip)
    {
        $list = $trip->bus->seats()->available();
        $count=$list->get();
        throw_if(count($count)== 0, ValidationException::withMessages([__('sorry There is not available seats')]));
        return $list;
    }

}
