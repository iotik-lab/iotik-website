<?php

use App\Repos\SettingRepository;

if (!function_exists('settings')) {
    function settings(string $key, mixed $value = null)
    {
        if ($value) {
            if (is_array($value)) $value = json_encode($value);
            return app(SettingRepository::class)->set($key, $value);
        }

        return app(SettingRepository::class)->get($key);
    }
}
