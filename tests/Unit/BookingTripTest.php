<?php

namespace Tests\Unit;

use App\Http\Traits\BookingOperations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class BookingTripTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function reserve_ticket()
    {
        $user = factory(\App\Models\User::class)->create();
        $data = [
            'user_id' => $user->id,
            'seat_id' => "6",
            'bus_id' => "1",
            'trip_id' => "1",
            'first_station' => "1",
            "to_station" => "2"
        ];
        $response = $this->actingAs($user, 'api')->json('POST', '/api/booking-trip', $data);
        $response->assertStatus(200);
        $response->assertJson(['status' => true]);
        $response->assertJson(['message' => "Ticket Created!"]);
        $response->assertJson(['data' => $data]);
    }

    public function test_example()
    {
        $this->assertTrue(true);
    }
}
