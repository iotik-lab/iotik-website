<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    use ApiResponser;
    public function getImages()
     {
        $images = Image::with('incubator')->get();
        return $this->success($images, 'images fetched successfully');
     }
    
    
}
