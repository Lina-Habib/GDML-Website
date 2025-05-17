<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class DrawGraphController extends Controller
{
    //

    public function index_2D(){
        App::setLocale('ar');
        return view('website_pages.draw_2D');
    }

    public function index_3D(){
        App::setLocale('ar');
        return view('website_pages.draw_3D');
    }
}
