<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class VideosController extends Controller
{
    //
    
    public function index(){
        App::setLocale('ar');
        return view('website_pages.videos');
    }
}
