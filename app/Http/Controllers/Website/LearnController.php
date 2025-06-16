<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\Models\Card;
use Illuminate\Support\Facades\Storage;

class LearnController extends Controller
{
    //

    public function index(){
        App::setLocale('ar');
        $cards = Card::all();
        return view('website_pages.learn', compact('cards'));
    }
}
