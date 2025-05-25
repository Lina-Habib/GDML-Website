<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('about-us');
// });


Route::get('home','App\Http\Controllers\Website\HomeController@index');
Route::get('photos','App\Http\Controllers\Website\PhotosController@index');
Route::get('videos','App\Http\Controllers\Website\VideosController@index');
Route::get('examples','App\Http\Controllers\Website\ExamplesController@index');
Route::get('draw_2D','App\Http\Controllers\Website\DrawGraphController@index_2D');
Route::get('draw_3D','App\Http\Controllers\Website\DrawGraphController@index_3D');
Route::get('about_us','App\Http\Controllers\Website\AboutUsController@index');


Route::get('language/{locale}', [App\Http\Controllers\LanguageController::class, 'change'])->name('language.change');





