<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Incubator;
use App\Models\Record;
use App\Repos\DashboardRepository;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use ApiResponser;
    public function index()
    {
        return view("pages.dashboard");
    }

    public function chartTemperature()
    {
        $incubators = Incubator::all();
        $recordTemp = [];
        foreach ($incubators as $incubator) {
            $device = Device::where('incubator_id', $incubator->id)
                    ->where('type', 'temperature')
                    ->first();
            $temp = DashboardRepository::getChart($device->id, "temperature");
        
            $dataTemp = [
                "name" => $incubator->name,
                "record" => $temp
            ];

            array_push($recordTemp, $dataTemp);
        }
        return $this->success($recordTemp,"Data Succesfuly Retrieved",200);
    }

    public function chartHumidity()
    {
        $incubators = Incubator::all();

        $recordHumi = [];
        foreach ($incubators as $incubator) {
            $device = Device::where('incubator_id', $incubator->id)
                    ->where('type', 'temperature')
                    ->first();

            $humi = DashboardRepository::getChart($device->id, "humidity");
            $dataHumi = [
                "name" => $incubator->name,
                "record" => $humi
            ];
            array_push($recordHumi, $dataHumi);
        }
        return $this->success($recordHumi,"Data Succesfuly Retrieved",200);
    }
}