<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{

    public function index(){
        App::setLocale('ar');
        return view('website_pages.home');
    }

    
}
