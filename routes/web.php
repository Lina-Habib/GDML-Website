<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
Auth::routes();


// Route::get('/', function () {
//     return view('about-us');
// });

Route::get('/','App\Http\Controllers\Website\HomeController@index');
Route::get('home','App\Http\Controllers\Website\HomeController@index');
Route::get('photos','App\Http\Controllers\Website\PhotosController@index');
Route::get('videos','App\Http\Controllers\Website\VideosController@index');
Route::get('examples','App\Http\Controllers\Website\ExamplesController@index');
Route::get('draw_2D/one_equation','App\Http\Controllers\Website\DrawGraphController@index_2D_one');
Route::get('draw_2D/two_equations','App\Http\Controllers\Website\TwoEquationsController@index');
Route::post('/equations/solve','App\Http\Controllers\Website\TwoEquationsController@solve');
Route::get('draw_3D','App\Http\Controllers\Website\DrawGraphController@index_3D');
Route::get('about_us','App\Http\Controllers\Website\AboutUsController@index');



Route::get('language/{locale}', [App\Http\Controllers\LanguageController::class, 'change'])->name('language.change');


Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['ar', 'en'])) {
        abort(400);
    }

    Session::put('locale', $locale);
    return redirect()->back();
})->name('switch.lang');


Route::get('/login', 'App\Http\Controllers\HomeController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/dashboard', 'App\Http\Controllers\Dashboard\MainController@index')->name('dashboard')->middleware('auth');




// Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
