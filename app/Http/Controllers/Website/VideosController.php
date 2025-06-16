<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;

class VideosController extends Controller
{
    //
    
    public function index(){
        App::setLocale('ar');
        $videos = Video::all();
        return view('website_pages.videos', compact('videos'));
    }
}
