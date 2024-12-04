<?php

namespace App\Repos;

use App\Jobs\SendVerification;
use App\Models\User;
use App\Models\VerifyCode;

class AuthRepository
{
    public static function sendVerification(User $user)
    {
        $verify = VerifyCode::create([
            'user_id' => $user->id,
            'code' => rand(100000, 999999),
            'expired_at' => now()->addMinutes(5),
        ]);

        SendVerification::dispatch($verify);
    }
}
