<?php

namespace App\Repos;

use App\Exceptions\AuthException;
use App\Jobs\SendVerification;
use App\Models\User;
use App\Models\VerifyCode;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{
    public static function sendVerification(User $user): VerifyCode
    {
        $verify = VerifyCode::create([
            'user_id' => $user->id,
            'code' => rand(100000, 999999),
            'expired_at' => now()->addMinutes(5),
        ]);

        SendVerification::dispatch($verify);

        return $verify;
    }

    public static function verifyCode(string $email, string $code): VerifyCode
    {
        $user = User::where('email', $email)->first();

        if (!$user)
            throw new AuthException("Email tidak terdaftar");

        $verify = $user->verifyCodes()->where('code', $code)->first();

        if (!$verify)
            throw new AuthException("Kode verifikasi salah");

        if (now()->isAfter($verify->expired_at)) {
            $verify->delete();
            throw new AuthException("Kode verifikasi kedaluwarsa");
        }

        $verify->update(['expired_at' => now()->addMinutes(5)]);
        return $verify;
    }

    public static function resetPassword(User $user, string $password)
    {
        $user->update(['password' => Hash::make($password)]);
        VerifyCode::where('user_id', $user->id)->delete();
    }
}
