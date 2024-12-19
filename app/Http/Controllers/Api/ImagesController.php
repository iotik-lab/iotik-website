<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandlingResource;
use App\Models\Image;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    use ApiResponser;
    public function getImages()
     {
        $images = CandlingResource::collection(Image::all());
        return $this->success($images->toArray(request()), 'images fetched successfully');
     }
    
    
}
