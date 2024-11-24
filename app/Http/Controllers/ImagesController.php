<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Incubators;
use App\Repos\MQTTRepository;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    use ApiResponser;

    public function create()
    {
        return view('pages.image.create');
    }

    public function preview(Request $request, Device $device)
    {
        $mode = strtoupper($request->mode);
        MQTTRepository::pub("camera/$device->code", "PRV:$mode");

        return $this->success(message: 'success');
    }
}
