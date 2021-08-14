<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('check');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return response()->json(Auth::user());
        }

        return redirect()->back()->with('message', 'Login gagal, cek kembali email dan password anda');
    }

    public function check()
    {
        return response()->json([], 200);
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return response()->json([], 200);
    }
}
