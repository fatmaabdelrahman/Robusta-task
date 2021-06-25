<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Traits\AuthOperations;

class AuthenticationController extends Controller
{
    use AuthOperations;

    public function login(LoginRequest $request)
    {
        $attemp = auth()->attempt($request->only($this->loginCredentials()));
        if (!$attemp) { return \responder::error("wrong credentials"); }
        $user = auth()->user();
        $user->token = \JWTAuth::fromUser($user);
        $resource = $this->resource();
        return \responder::success(new $resource($user));
    }

}
