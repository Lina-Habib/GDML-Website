<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Feedback;


class MainController extends Controller
{
    //

    public function index(){
        $cardCount = Card::count(); // fetch count of cards
        $feedbacks = Feedback::count();
        return view('dashboard_pages.main', compact('cardCount', 'feedbacks'));
    }

}
