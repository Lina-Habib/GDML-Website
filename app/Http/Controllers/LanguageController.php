<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    //

    public function change(Request $request, $locale)
    {
        if (in_array($locale, ['en', 'ar'])) {
            App::setLocale($locale);
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
