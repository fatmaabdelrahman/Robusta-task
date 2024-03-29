<?php

namespace Tests\Unit;

use App\Http\Traits\BookingOperations;
use App\Models\User;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookingTripTest extends TestCase
{
//    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */



    public function test_booking_ticket()
    {
        $user = User::factory()->create();
        $data = [
            'start_from' => '1',
            'end_to' => '2',
        ];
        $this->actingAs($user, 'api')->json('POST', '/api/booking-trip', $data);
        $this->assertTrue(true);
    }

    public function test_example()
    {
        $this->assertTrue(true);
    }
}
