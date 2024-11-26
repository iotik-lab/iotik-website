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
        $minTemp = 37.0;
        $maxTemp = 39.0;
        $minHumi = 55.0;
        $maxHumi = 65.0;
        return response()->json(['minTemp' => $minTemp, 'maxTemp' => $maxTemp, 'minHumi' => $minHumi, 'maxHumi' => $maxHumi]);
    }
}
