<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function user(): ?\Illuminate\Contracts\Auth\Authenticatable
    {
        return auth()->user();
    }

    public function login(UserRequest $request): \Illuminate\Http\JsonResponse
    {
        $valid = $request->validated();
        if (Auth::attempt($valid)) {
            $accessToken = auth()->user()->createToken('Login')->accessToken;

            return response()->json(["user"=> auth()->user(), "access_token" => $accessToken]);
        }

        return response()->json(["message"=>"Invalid user"]);

    }

}
