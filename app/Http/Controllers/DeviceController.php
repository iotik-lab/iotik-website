<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Incubator;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incubators = Incubator::all();
        return view("pages.device.index", [
            "incubators" => $incubators
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'code' => 'required',
            'incubator_id' => 'required',
            'type' => 'required',
        ]);
        $request->merge([
            'last_send' => now()
        ]);
        Device::create($request->all());
        return redirect()->route('device.index')->with('success', 'Data successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $device = Device::where('incubator_id', $id)->first();
        $dataTemperature = $device->record()->where('type', 'temperature')->limit(10)->latest()->get();
        $arrayTemperature = [];
        $arrayTimeTemperature = [];
        foreach ($dataTemperature as $data) {
            array_push($arrayTemperature, $data->value);
            array_push($arrayTimeTemperature, $data->created_at);
        }
        $dataHumidity = $device->record()->where('type', 'humidity')->limit(10)->latest()->get();
        $arrayHumidity = [];
        $arrayTimeHumidity = [];
        foreach ($dataHumidity as $data) {
            array_push($arrayHumidity, $data->value);
            array_push($arrayTimeHumidity, $data->created_at);
        }
        return view("pages.device.detail", [
            "device" => $device,
            "arrayTemperature" => $arrayTemperature,
            "arrayHumidity" => $arrayHumidity,
            "arrayTimeTemperature" => $arrayTimeTemperature,
            "arrayTimeHumidity" => $arrayTimeHumidity
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
