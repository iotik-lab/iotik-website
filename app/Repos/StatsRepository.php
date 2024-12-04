<?php

namespace App\Repos;

use App\Models\Record;

class StatsRepository
{
    public function getStats($device_id, $type)
    {
        $record = Record::where('device_id',$device_id)
        ->where('type', $type)
        ->latest('created_at')
        ->first();

        return $record->value;
    }
    public function getStatsDetail($device_id, $type)
    {
        $record = Record::selectRaw('DATE(created_at) as date, HOUR(created_at) as hour, AVG(value) as average')
        ->groupByRaw('DATE(created_at), HOUR(created_at)')
        ->orderByRaw('DATE(created_at), HOUR(created_at)')
        ->where('device_id',$device_id)
        ->where('type', $type)
        ->orderBy('hour')
        ->limit(10)
        ->latest('created_at')
        ->get();
        return $record;
    }
}