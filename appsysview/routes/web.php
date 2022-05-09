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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/partner', 'HomeController@parnerliste')->name('parnerliste');


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
    return view('home/login');
})->name('loginpage');

Route::get('/forgetpass',function(){
    return view('home/passforget');
})->name('forgetpass');


//ADMIN PAGES
Route::get('/admin','DashpageController@index')->name('adminpage');
//Slide Shows

//Route::resource('slide', 'SlideController')->names([
//    'index'=> 'listslide',
//    'show'=> 'viewslide',
//    'create'=> 'newslide',
//    'store',
//    'edit'=>'editslide',
//    'update',
//    'destroy'
//]);
//Slide Shows








/*========================Les routes de Helpingview Start===============================*/
Route::resource('helpingview','HelpingviewController')->names([
    'index'=> 'listhelping',
    'show',
    'create'=> 'newhelping',
    'store'=>'inserthelping',
    'edit'=>'edithelping',
    'update' =>'addupdhelping',
    'destroy'=>'delhelping'
]);
Route::get('/delhelping','HelpingviewController@sofderestore')->name('listedelhelping');
Route::get('/restores/{id}','HelpingviewController@restoredestroy')->name('helpingrestoredele');
Route::delete('/destoreds/{id}','HelpingviewController@destoredefinitely')->name('helpingdeletecomplete');
/*========================Les routes de Helpingview END===============================*/


/*========================Les routes de SKill Start===============================*/
Route::resource('skill','SkillController')->names([
    'index'=> 'listskill',
    'show',
    'create'=> 'newskill',
    'store'=>'insertskill',
    'edit'=>'editskill',
    'update' =>'addupdskill',
    'destroy'=>'delskill'
]);
Route::get('/delskill','SkillController@sofderestore')->name('listedelskill');
Route::get('/restoreskill/{id}','SkillController@restoredestroy')->name('skillrestoredele');
Route::delete('/destoredskill/{id}','SkillController@destoredefinitely')->name('skilldeletecomplete');
/*========================Les routes de SKill END===============================*/


/*========================Les routes de Partners Start===============================*/
Route::resource('partners', 'PartnerController')->names([
    'index'=> 'listpartner',
    'show',
    'create'=> 'newpartner',
    'store'=>'insertpartner',
    'edit'=>'editpartner',
    'update' =>'addupdpartner',
    'destroy'=>'delpartner'
]);
Route::get('/delpartener','PartnerController@sofderestore')->name('listedelpartener');
Route::get('/restoredestroy/{id}','PartnerController@restoredestroy')->name('restoredelepartener');
Route::delete('/destoredefinitely/{id}','PartnerController@destoredefinitely')->name('deletecompletepartener');
/*========================Les routes de Partners END===============================*/
