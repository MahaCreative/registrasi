<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->middleware('auth:sanctum');
        $response = [];
        $request->validate([
            'nim' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::with('roles', 'profile')->where('email', $request->nim)->first();
        // dd($user);

        if (!$user || !Hash::check($request->password, $user->password)) {

            throw ValidationException::withMessages([
                'nim' => ['The provided credentials are incorrect.'],
            ]);
            $response['message'] = "Gagal Login";
        }
        // dd($user->getRoleNames()[0])


        $response['message'] = "Berhasil";
        $token = $user->createToken("web-token")->plainTextToken;
        $response['data'] = $user;
        $response['token'] = $token;

        return response()->json($response);
    }
}