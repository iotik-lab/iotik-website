<?php
namespace App\Repos;

use App\Models\Record;

class DashboardRepository
{
    public static function getChart($device_id, $type){
        $record = Record::selectRaw('DATE(created_at) as date, HOUR(created_at) as hour, AVG(value) as average')
        ->groupByRaw('DATE(created_at), HOUR(created_at)')
        ->orderByRaw('DATE(created_at) DESC, HOUR(created_at) DESC')
        ->where('device_id',$device_id)
        ->where('type', $type)
        ->orderBy('hour')
        ->limit(10)
        ->latest('created_at')
        ->get();
        return $record;
    }
}