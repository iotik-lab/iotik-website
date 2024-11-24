<?php

namespace App\Traits;

trait EnumHelper
{
    public static function values(): array
    {
        return array_column(static::cases(), 'value');
    }
}
