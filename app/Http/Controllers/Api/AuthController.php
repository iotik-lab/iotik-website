<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ForgotPassRequest;
use App\Http\Requests\Api\LoginRequest;
use App\Models\User;
use App\Repos\AuthRepository;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;

    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
            return $this->error(message: 'Username atau password salah', code: 401);

        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return $this->success([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 'Berhasil Login');
    }

    public function forgot(ForgotPassRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) return $this->error(message: 'Email tidak terdaftar', code: 401);

        AuthRepository::sendVerification($user);
        return $this->success(message: 'Berhasil mengirimkan kode verifikasi');
    }
}
