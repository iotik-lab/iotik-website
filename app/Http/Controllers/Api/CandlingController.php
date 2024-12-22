<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\GetPrediction;
use App\Models\Device;
use App\Models\Image;
use App\Repos\ImageRepository;
use App\Repos\MQTTRepository;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CandlingController extends Controller
{
    use ApiResponser;
    public function candling(Request $request)
    {
        $camera = Device::where('code', $request->device_id)->first();

        if (!$camera)
            return response()->json(['status' => 404], 404);

        Log::info('candling', $request->all());

        $image = base64_decode($request->photo);
        $name = "candling" . time() . '.jpg';

        Storage::disk('public')->put("/candling/$name", $image);
        MQTTRepository::candling($camera->incubator, true);

        $image = Image::create([
            'incubator_id' => $camera->incubator_id,
            'original_image' => $name
        ]);

        Http::post(config('app.ws_http') . '/candling');
        GetPrediction::dispatch($image);

        return response()->json(['status' => 'success']);
    }
}
