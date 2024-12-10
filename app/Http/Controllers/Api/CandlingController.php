<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Repos\MQTTRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CandlingController extends Controller
{
    public function candling(Request $request)
    {
        $camera = Device::where('code', $request->device_id)->first();

        if (!$camera)
            return response()->json(['status' => 404], 404);

        Log::info('candling', $request->all());

        $image = base64_decode($request->photo);
        Storage::disk('local')->put('candling.jpg', $image);
        MQTTRepository::candling($camera->incubator, true);

        return response()->json(['status' => 'success']);
    }
}
