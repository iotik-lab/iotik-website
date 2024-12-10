<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Incubator;
use App\Models\Incubators;
use App\Repos\MQTTRepository;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    use ApiResponser;

    public function create(Incubator $incubator)
    {
        $camera = $incubator->devices()->where("type", "camera")->first();
        $led = $incubator->devices()->where("type", "candling")->first();

        return view('pages.image.create', compact("camera", "led", "incubator"));
    }

    public function preview(Request $request, Device $device)
    {
        $mode = strtoupper($request->mode);
        MQTTRepository::pub("camera/$device->code", "PRV:$mode");

        return $this->success(message: 'success');
    }

    public function led(Request $request, Device $device)
    {
        $leds = @json_decode($request->led) ?? [];
        MQTTRepository::pub("led/{$device->code}", json_encode($leds));

        return $this->success(message: 'success');
    }

    public function candling(Incubator $incubator)
    {
        MQTTRepository::candling($incubator);
        return $this->success(message: 'success');
    }
}
