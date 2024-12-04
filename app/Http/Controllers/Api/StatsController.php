<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Record;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Repos\StatsRepository;

class StatsController extends Controller
{
    use ApiResponser;
    public function stats($incubator_id) {
        $device = Device::where('incubator_id', $incubator_id)
        ->where('type', 'temperature')->first();

        if (!$device) return $this->error("Device Not Found",404);

        $recordTemp = (new StatsRepository())->getStats($device->id, "temperature");
        $recordHumi = (new StatsRepository())->getStats($device->id, "humidity");
        $data = [
            "temperature" => $recordTemp,
            "humidity" => $recordHumi
        ];
        return $this->success($data,"Data Succesfuly Retrieved",200);
    }
    public function statsDetail($incubator_id) {
        $device = Device::where('incubator_id', $incubator_id)
        ->where('type', 'temperature')->first();

        if (!$device) return $this->error("Device Not Found",404);
        
        $recordTemp = (new StatsRepository())->getStatsDetail($device->id, "temperature");
        $recordHumi = (new StatsRepository())->getStatsDetail($device->id, "humidity");
        $data = [
            "temperature" => $recordTemp,
            "humidity" => $recordHumi
        ];
        return $this->success($data,"Data Succesfuly Retrieved",200);
    }
}
