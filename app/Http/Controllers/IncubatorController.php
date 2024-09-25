<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncubatorRequest;
use App\Models\Incubators;
use Illuminate\Http\Request;

class IncubatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incubators = Incubators::all();
        return view('pages.incubator.index',[
            'incubators'=> $incubators
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.incubator.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IncubatorRequest $request)
    {
        Incubators::create($request->all());
        return redirect()->route('incubator.index')->with('success','Data successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $incubators = Incubators::find($id);
        return view('pages.incubator.edit',[
            'incubator' => $incubators
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IncubatorRequest $request, string $id)
    {
        $incubator = Incubators::find($id);
        $incubator->update($request->all());
        return redirect()->route('incubator.index')->with('success','Date Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Incubators::find($id)->delete();
        return redirect()->route('incubator.index')->with('success','Data Successfully Deleted');
    }
}