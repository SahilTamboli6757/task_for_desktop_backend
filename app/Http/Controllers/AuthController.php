<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only("email", "password");

        if ($token = JWTAuth::attempt($credentials)) {

            return response()->json([
                "message" => "Login successful",
                "token" => $token,
            ], 200);
        }

        return response()->json(["message" => "invalid username or password"], 401);
    }

    public function signup(SignupRequest $request)
    {
        $credentials = $request->validated();

        $user = User::create($credentials);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            "message" => "user created",
            "token" => $token,
        ], 200);
    }

    public function showProfile()
    {
        return response()->json(["user" => Auth::user()], 200);
    }
    public function updateProfile(ProfileUpdateRequest $request)
    {
        $user = User::find(Auth::user()->id);

        $params = $request->validated();

        if (isset($params["password"])) {
            $params["password"] = Hash::make($params["password"]);
        } else {
            $params["password"] = $user->password;
        }


        $user->update($params);

        return response()->json(["message" => "profile update"], 200);
    }


    public function logout()
    {
        Auth::logout();

        return response()->json(["message" => "logout successfully "], 200);
    }
}
