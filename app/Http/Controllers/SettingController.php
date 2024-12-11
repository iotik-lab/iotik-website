<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('pages.setting.index');
    }

    public function update(Request $request)
    {
        settings('temp.min', $request->temp['min']);
        settings('temp.max', $request->temp['max']);
        settings('humi.min', $request->humi['min']);
        settings('humi.max', $request->humi['max']);

        return back();
    }
}
