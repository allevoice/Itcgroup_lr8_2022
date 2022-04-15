<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

//page erreur 404
Route::fallback(function (){
    return view('404');
});


Route::get('/', function () {
    return view('home/home');
})->name('home');

Route::get('/about', function () {
    return view('home/about');
})->name('about');

Route::get('services', function () {
    return view('home/services');
})->name('services');

Route::get('projet', function () {
    return view('home/projects');
})->name('projects');

Route::get('blog', function () {
    return view('home/blog');
})->name('blog');

Route::get('contact', function () {
    return view('home/contact');
})->name('contact');


Route::post('lang', function () {
    return 'Change langues';
})->name('langchange');



Route::get('/login',function(){
    echo 'login page';
})->name('loginpage');


//ADMIN PAGES
Route::get('/admin','App\Http\Controllers\DashpageController@index')->name('adminpage');

//Slide Shows
Route::get('/slides','SlideshowController@index')->name('slideview');
Route::get('/view/{id}','SlideshowController@show')->name('viewslideid');
Route::get('/new','SlideshowController@create')->name('newslideform');
Route::post('/insert','SlideshowController@store')->name('insertslideform');
//Slide Shows
