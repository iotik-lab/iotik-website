<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function tempThreshold($device_id)
    {
        $device = Device::where('code', $device_id)->first();
        if (!$device) return response()->json(['status' => 404], 404);

        return response()->json([
            'minTemp' => settings('temp.min') ?? 37,
            'maxTemp' => settings('temp.max') ?? 39,
            'minHumi' => settings('humi.min') ?? 55,
            'maxHumi' => settings('humi.max') ?? 70,
        ]);
    }
}
