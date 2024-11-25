<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecordController extends Controller
{
    public function apiCreate(Request $request)
    {
        $device = Device::where('code', $request->device_id)->first();
        if (!$device) return response()->json(['status' => 404], 404);

        $temperature = number_format($request->temperature, 2);
        $humidity = number_format($request->humidity, 2);

        Record::create([
            'device_id' => $device->id,
            'type' => "temperature",
            'value' => $temperature
        ]);

        Record::create([
            'device_id' => $device->id,
            'type' => "humidity",
            'value' => $humidity,
        ]);

        Http::post(config('app.ws_http') . '/temperature', [
            'device_id' => $device->code,
            'temperature' => $temperature,
            'humidity' => $humidity,
        ]);

        return response()->json(['status' => 200]);
    }
}
