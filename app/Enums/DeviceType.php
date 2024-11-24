<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum DeviceType: string
{
    use EnumHelper;

    case TEMPERATURE = 'temperature';
    case CAMERA = 'camera';
    case CANDLING = 'candling';
}
