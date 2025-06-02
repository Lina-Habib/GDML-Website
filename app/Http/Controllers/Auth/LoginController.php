<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

     public function showLoginForm(){
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';
        return view('login', compact('dir')); 
    }
}
