<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SeatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'bus_number'=>$this->bus->bus_number,
            'seat_number'=>$this->seat_number,
            'is_available'=>$this->is_available
        ];
    }
}
