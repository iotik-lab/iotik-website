<?php

namespace App\Repos;

use App\Models\Setting;

class SettingRepository
{
    public static function get($key, $default = null)
    {
        return Setting::where('key', $key)->first()->value ?? $default;
    }

    public static function set($key, $value)
    {
        return Setting::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
