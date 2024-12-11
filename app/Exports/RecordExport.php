<?php

namespace App\Exports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RecordExport implements FromCollection, WithHeadings
{
    protected $device_id;
    
    /**
    */
    public function __construct($device_id)
    {
        $this->device_id = $device_id;
    }

    public function headings(): array
    {
        return [
            'Date',
            'Tipe',
            'Value'
        ];
    }
    public function collection()
    {
        $records = Record::where("device_id", $this->device_id)
        ->select('created_at', 'type', 'value')
        ->get();
        return $records;
    }
}
