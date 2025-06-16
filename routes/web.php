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
Route::get('vid','App\Http\Controllers\Website\VideosController@index');
Route::get('learn','App\Http\Controllers\Website\LearnController@index');
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


Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

//routes for dashboard pages
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/dashboard', 'App\Http\Controllers\Dashboard\MainController@index')->name('dashboard');

    // images page
    Route::get('/images', 'App\Http\Controllers\Dashboard\ImageController@index')->name('images.index');
    Route::get('/images/create', 'App\Http\Controllers\Dashboard\ImageController@create')->name('images.create');
    Route::post('/images', 'App\Http\Controllers\Dashboard\ImageController@store')->name('images.store');
    Route::get('/images/{image}/edit', 'App\Http\Controllers\Dashboard\ImageController@edit')->name('images.edit');
    Route::put('/images/{image}', 'App\Http\Controllers\Dashboard\ImageController@update')->name('images.update');
    Route::delete('/images/{image}', 'App\Http\Controllers\Dashboard\ImageController@destroy')->name('images.destroy');


    // videos page
    Route::get('/videos', 'App\Http\Controllers\Dashboard\VideoController@index')->name('videos.index');
    Route::get('/videos/create', 'App\Http\Controllers\Dashboard\VideoController@create')->name('videos.create');
    Route::post('/videos', 'App\Http\Controllers\Dashboard\VideoController@store')->name('videos.store');
    Route::get('/videos/{video}/edit', 'App\Http\Controllers\Dashboard\VideoController@edit')->name('videos.edit');
    Route::put('/videos/{video}', 'App\Http\Controllers\Dashboard\VideoController@update')->name('videos.update');
    Route::delete('/videos/{video}', 'App\Http\Controllers\Dashboard\VideoController@destroy')->name('videos.destroy');


    // cards page
    Route::get('/cards', 'App\Http\Controllers\Dashboard\CardController@index')->name('cards.index');
    Route::get('/cards/create', 'App\Http\Controllers\Dashboard\CardController@create')->name('cards.create');
    Route::post('/cards', 'App\Http\Controllers\Dashboard\CardController@store')->name('cards.store');
    Route::get('/cards/{card}/edit', 'App\Http\Controllers\Dashboard\CardController@edit')->name('cards.edit');
    Route::put('/cards/{card}', 'App\Http\Controllers\Dashboard\CardController@update')->name('cards.update');
    Route::delete('/cards/{card}', 'App\Http\Controllers\Dashboard\CardController@destroy')->name('cards.destroy');

    // feedback page
    Route::post('/feedback', 'App\Http\Controllers\Dashboard\FeedbackController@store')->name('feedback.store');
    Route::get('/feedbacks', 'App\Http\Controllers\Dashboard\FeedbackController@index')->name('feedbacks.index');
    Route::delete('/feedbacks/{id}', 'App\Http\Controllers\Dashboard\FeedbackController@destroy')->name('feedbacks.destroy');

    Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

});
