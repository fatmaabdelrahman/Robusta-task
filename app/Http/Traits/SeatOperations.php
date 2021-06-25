<?php


namespace App\Http\Traits;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

trait SeatOperations
{

    public function loginCredentials()
    {
        return [
            'email', 'password'
        ];
    }

    public function resource()
    {
        return UserResource::class;
    }


}
