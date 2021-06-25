<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([], function () {
    //login service
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AuthenticationController::class, 'login']);
    });
    Route::group(['middleware' => 'auth:api'], function () {
        //service for User can book a seat if there is an available seat
        Route::post('booking-trip', [BookingController::class, 'bookingTrip']);
        //service for available seat list
        Route::get('seat-list', [SeatController::class, 'seatList']);
    });
});
