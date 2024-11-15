<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function apiCreate(Request $request)
    {
        $temperature = number_format($request->temperature, 2); 
        $humidity = number_format($request->humidity, 2);
        Record::create([
            'device_id' => $request->device_id,
            'type' => "temperature",
            'value' => $temperature
        ]);
        Record::create([
            'device_id' => $request->device_id,
            'type' => "humidity",
            'value' => $humidity,
        ]);
        return response()->json(['status' => 200]);
    }
}
