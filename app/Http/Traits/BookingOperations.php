<?php


namespace App\Http\Traits;

use App\Http\Resources\UserResource;
use App\Models\Ticket;
use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

trait BookingOperations
{

    public function booking($request)
    {
        $trips = Trip::whereHas('stations', function ($query) {
            $query->whereIn('city_id', [\request('start_from'), \request('end_to')]);
        })->get();
        $trip = $this->validateTrip($trips);
        $available_seats = $this->availableBusSeats($trip);
        $ticket = $this->reserveTicket($trip, $request, $available_seats);
        return $ticket;

    }

    public function validateTrip($trips)
    {
        foreach ($trips as $trip) {
            $departure_time = $trip->departure_time;
            $arrival_time = $trip->arrival_time;
            $booking_time = Carbon::now();
            if ($booking_time->between($departure_time, $arrival_time)) {
                return $trip->first();
            }
            throw_if(!$trip, ValidationException::withMessages([__('sorry There is not available tripe right now')]));
        }

    }

    public function availableBusSeats($trip)
    {
        $available_seats = $trip->bus->seats()->available()->get();
        throw_if(!$available_seats, ValidationException::withMessages([__('sorry There is not available seats')]));
        return $available_seats;
    }

    public function reserveTicket($trip, $request, $available_seats)
    {
        $random_seat = $available_seats->random();
        $data['user_id'] = auth()->user()->id;
        $data['seat_id'] = $random_seat->id;
        $data['bus_id'] = $random_seat->bus_id;
        $data['trip_id'] = $trip->id;
        $data['first_station'] = $request->start_from;
        $data['to_station'] = $request->end_to;
        $ticket = Ticket::create($data);
        $this->changeSeatStatus($random_seat);
        return $ticket;
    }

    public function changeSeatStatus($random_seat)
    {
        $random_seat->update(['is_available' => 0]);

    }


}
