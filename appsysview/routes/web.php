<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

//abort(404,'What code view');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/partner', 'HomeController@parnerliste')->name('parnerliste');
Route::get('/services', 'HomeController@serviceofferthome')->name('services');
Route::get('/service_detail/{code}', 'HomeController@servicedetailshome')->name('service_details');
Route::get('/about', 'HomeController@aboutpage')->name('about');
Route::get('/projet', 'HomeController@projetpage')->name('projects');









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






/*========================Les routes de advisor Start===============================*/
Route::resource('projectdata','ProjectController')->names([
    'index'=> 'listprojectdata',
    'show',
    'create'=> 'newprojectdata',
    'store'=>'insertprojectdata',
    'edit'=>'editprojectdata',
    'update' =>'addupdprojectdata',
    'destroy'=>'delprojectdata'
]);
Route::get('/newdataprojectdata','ProjectController@newdata')->name('addstprojectdata');
Route::get('/projectdataimg/{slug}','ProjectController@updimages')->name('editimgdataprojectdata');
Route::get('/projectdataviewdel','ProjectController@sofderestore')->name('projectdatalstdel');
Route::get('/restoreprojectdata/{id}','ProjectController@restoredestroy')->name('restdelprojectdata');
Route::delete('/destoreprojectdata/{id}','ProjectController@destoredefinitely')->name('projectdatadelete');
/*========================Les routes de advisor END===============================*/




/*========================Les routes de advisor Start===============================*/
Route::resource('advisor','AdvisorController')->names([
    'index'=> 'listadvisor',
    'show',
    'create'=> 'newadvisor',
    'store'=>'insertadvisor',
    'edit'=>'editadvisor',
    'update' =>'addupdadvisor',
    'destroy'=>'deladvisor'
]);
Route::get('/newdataadvisor','AdvisorController@newdata')->name('addstadvisor');
Route::get('/advisorimg/{slug}','AdvisorController@updimages')->name('editimgdataadvisor');
Route::get('/advisorviewdel','AdvisorController@sofderestore')->name('advisorlstdel');
Route::get('/restoreadvisor/{id}','AdvisorController@restoredestroy')->name('restdeladvisor');
Route::delete('/destoreadvisor/{id}','AdvisorController@destoredefinitely')->name('advisordelete');
/*========================Les routes de advisor END===============================*/






/*========================Les routes de Founder Start===============================*/
Route::resource('founder','FounderController')->names([
    'index'=> 'listfounder',
    'show',
    'create'=> 'newfounder',
    'store'=>'insertfounder',
    'edit'=>'editfounder',
    'update' =>'addupdfounder',
    'destroy'=>'delfounder'
]);
Route::get('/newdatafounder','FounderController@newdata')->name('addstfounder');
Route::get('/founderimg/{slug}','FounderController@updimages')->name('editimgdatafounder');
Route::get('/founderviewdel','FounderController@sofderestore')->name('founderlstdel');
Route::get('/restorefounder/{id}','FounderController@restoredestroy')->name('restdelfounder');
Route::delete('/destorefounder/{id}','FounderController@destoredefinitely')->name('founderdelete');
/*========================Les routes de Founder END===============================*/







/*========================Les routes de Our Compagnie Start===============================*/
Route::resource('ourcompagnie','OurcompagnieController')->names([
    'index'=> 'listourcmg',
    'show',
    'create'=> 'newourcmg',
    'store'=>'insertourcmg',
    'edit'=>'editourcmg',
    'update' =>'addupdourcmg',
    'destroy'=>'delourcmg'
]);
Route::get('/newdataaddcompagnie','OurcompagnieController@newdata')->name('addstourcmg');
Route::get('/ourcompagnieimg/{slug}','OurcompagnieController@updimages')->name('editimgdataourcmg');
Route::get('/ourcompagniedel','OurcompagnieController@sofderestore')->name('ourcmglstdel');
Route::get('/restoreourcompagnie/{id}','OurcompagnieController@restoredestroy')->name('restdelourcmg');
Route::delete('/destoreourcompagnie/{id}','OurcompagnieController@destoredefinitely')->name('ourcmgdelete');
/*========================Les routes de Our Compagnie END===============================*/






/*========================Les routes de Header Page information   Start===============================*/
Route::resource('headerpage','HeaderpageController')->names([
    'index'=> 'listheaderpage',
    'show',
    'create',
    'store',
    'edit'=>'editheaderpage',
    'update' =>'addupdheaderpage',
    'destroy'
]);
Route::get('/newtataheaderpage','HeaderpageController@newdata')->name('newinsertemptyheaderpage');

/*========================Les routes de Header Page information   END===============================*/



/*========================Les routes de Slide show Start===============================*/
Route::resource('slideadmin','HomesliderController')->names([
    'index'=> 'listslide',
    'show',
    'create'=> 'newslide',
    'store'=>'insertslide',
    'edit'=>'editslide',
    'update' =>'addupdslide',
    'destroy'=>'delslide'
]);
Route::get('/imgupdateslide/{slug}','HomesliderController@updimages')->name('editimgdataslide');
Route::get('/slidesadmindel','HomesliderController@sofderestore')->name('slidelstdel');
Route::get('/restoreslideadmin/{id}','HomesliderController@restoredestroy')->name('restdelslide');
Route::delete('/destoreslidesadmin/{id}','HomesliderController@destoredefinitely')->name('slidedelete');
/*========================Les routes de Slide show END===============================*/



/*========================Les routes de services Start===============================*/
Route::resource('servicesadmin','ServiceoffertController')->names([
    'index'=> 'listserve',
    'show',
    'create'=> 'newserve',
    'store'=>'insertserve',
    'edit'=>'editserve',
    'update' =>'addupdserve',
    'destroy'=>'delserve'
]);
Route::get('/imgupdate/{slug}','ServiceoffertController@updimages')->name('editimgdata');
Route::get('/servicesadmindel','ServiceoffertController@sofderestore')->name('servelstdel');
Route::get('/restoreservicesadmin/{id}','ServiceoffertController@restoredestroy')->name('restdelserve');
Route::delete('/destoreservicesadmin/{id}','ServiceoffertController@destoredefinitely')->name('servedelete');
/*========================Les routes de services END===============================*/






/*========================Les routes de Bringing Start===============================*/
Route::resource('bringing','BringingController')->names([
    'index'=> 'listbringing',
    'show',
    'create'=> 'newbringing',
    'store'=>'insertbringing',
    'edit'=>'editbringing',
    'update' =>'addupdbringing',
    'destroy'=>'delbringing'
]);
Route::get('/bringdel','BringingController@sofderestore')->name('bringlstdel');
Route::get('/restorebring/{id}','BringingController@restoredestroy')->name('restdelbringing');
Route::delete('/destoredbring/{id}','BringingController@destoredefinitely')->name('bringingdelete');
/*========================Les routes de Bringing END===============================*/

/*========================Les routes de How are you Start===============================*/
Route::resource('howareyou','HowareyouController')->names([
    'index'=> 'listhowareyou',
    'show',
    'create'=> 'newhowareyou',
    'store'=>'inserthowareyou',
    'edit'=>'edithowareyou',
    'update' =>'addupdhowareyou',
    'destroy'=>'delhowareyou'
]);
Route::get('/del','HowareyouController@sofderestore')->name('listedelhowareyou');
Route::get('/restoreshu/{id}','HowareyouController@restoredestroy')->name('restdelhowaru');
Route::delete('/destoredhowareu/{id}','HowareyouController@destoredefinitely')->name('hoeudelete');
/*========================Les routes de How are you END===============================*/


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
