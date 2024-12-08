<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CandlingController extends Controller
{
    public function candling(Request $request)
    {
        Log::info('candling', $request->all());

        $image = base64_decode($request->photo);
        Storage::disk('local')->put('candling.jpg', $image);

        return response()->json(['status' => 'success']);
    }
}
