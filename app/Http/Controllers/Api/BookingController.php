<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Http\Traits\BookingOperations;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    use BookingOperations;

    public function bookingTrip(BookingRequest $request)
    {
        $this->booking($request);

    }
}
