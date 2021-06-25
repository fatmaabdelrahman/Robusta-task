<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeatRequest;
use App\Http\Resources\BaseCollection;
use App\Http\Resources\SeatResource;
use App\Http\Traits\BookingOperations;
use App\Http\Traits\SeatOperations;

class SeatController extends Controller
{
    use SeatOperations, BookingOperations;

    public function seatList(SeatRequest $request)
    {
        $seat_lists = $this->userTripAvailableSeats($request)->paginate(10);
        return \responder::success(new BaseCollection($seat_lists, SeatResource::class));

    }
}
