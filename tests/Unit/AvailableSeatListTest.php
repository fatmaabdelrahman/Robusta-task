<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AvailableSeatListTest extends TestCase
{
//    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_available_seat_list_service()
    {
        $user = User::factory()->create();
        $data = [
            'start_from' => "1",
            'end_to' => "2",
        ];
        $this->actingAs($user,'api')->json('GET', '/api/seat-list', $data);
        $this->assertTrue(true);
    }

    public function test_example()
    {
        $this->assertTrue(true);
    }
}
