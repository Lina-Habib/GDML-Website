<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App;

class PhotosController extends Controller
{
    //
    public function index(){
        App::setLocale('ar');
        $images = Image::all();
        return view('website_pages.photos', compact('images'));
    }
}
