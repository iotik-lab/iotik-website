<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function create($id) {
        return view('pages.image.index');
    }
}
