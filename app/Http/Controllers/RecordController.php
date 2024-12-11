<?php

namespace App\Http\Controllers;

use App\Exports\RecordExport;
use App\Models\Device;
use App\Models\Incubator;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incubators = Incubator::all();
        return view("pages.record.index",[
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function reportExport(Request $request)
    {
        $device = Device::where('incubator_id', $request->incubator_id)->first();
        $name = $device->incubator->name;
        return Excel::download(new RecordExport($device->id),"record $name.xlsx");
    }
}
