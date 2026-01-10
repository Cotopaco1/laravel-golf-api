<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\LoginRequest;
use App\Http\Responses\ApiResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        /*Validate password*/
        if(Auth::attempt($credentials)){
            $user = User::query()->where('email', $credentials['email'])->firstOrFail();
            $expiration = now()->addWeek();

            $token = $user->createToken(
                name: 'login',
                expiresAt: $expiration
            )->plainTextToken;

            return ApiResponse::success([
                'token' => $token,
                'expiration_time' => $expiration
            ]);
        }
        return ApiResponse::error('Wrong credentials', statusCode: 401);
    }

}
