<?php

namespace App\Http\Controllers;

use App\Models\Incubator;
use Illuminate\Http\Request;

class LedController extends Controller
{
    public function update(Incubator $incubator, Request $request)
    {
        $incubator->update([
            'leds' => json_decode($request->leds, true),
        ]);

        return response()->json(['success' => true]);
    }
}
