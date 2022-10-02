<?php

use App\Models\Web;
use App\Models\Page;
use App\Models\About;
use App\Models\Article;
use App\Models\OurTeam;
use App\Models\Program;
use App\Models\OurSpeaker;
use App\Http\Controllers\NewAbout;
use App\Http\Controllers\internship;
use App\Http\Controllers\Postcontrol;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontrol;
use App\Http\Controllers\DashboardTeam;

use App\Http\Controllers\DashboardAbout;
use App\Http\Controllers\DashboardGambar;
use App\Http\Controllers\Registercontrol;
use App\Http\Controllers\DashboardSpeaker;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Postcontrol::class, 'index']);

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'title' => 'Dashboard',
        "programs" => Program::content(),
        "about" => About::content(),
        "articles" => Article::content(),
        "Webs" => Web::content()
    ]);
})->middleware('auth');

Route::get('/About/company-profile', function(About $About){
    return view('about.company', [
        'title' => "Company Profile"
    ]);
});

Route::get('/About/our-team', function(About $About){
    return view('about.staff', [
        'title' => "Our Team",
        'our' => OurTeam::all()
    ]);
});
Route::get('/About/our-speaker', function(About $About){
    return view('about.speaker', [
        'title' => "Our Speaker",
        'our' => OurSpeaker::all()
    ]);
});

Route::get('/Article', function(){
    return view('article.index', [
        'title' => "Article"
    ]);
});

Route::get('/article/post', function(){
    return view('article.news', [
        'title' => "Article"
    ]);
});

Route::get('/sign-in', function(){
    return view('article.webinar_sign', [
        'title' => "Webinar"
    ]);
});
Route::get('/About/{page:slug}', function(Page $page){
    return view('about.internship', [
        'title' => $page -> judul,
        'page' =>$page
    ]);
});

Route::get('/Program/{page:slug}', function(Page $page){
    return view('program.index', [
        'title' => $page -> judul,
        'page' => $page,
        'slug' => $page -> slug
    ]);
})->scopeBindings();


Route::resource('/dashboard/page', DashboardAbout::class) ->middleware('auth');
Route::resource('/dashboard/ourSpeaker', DashboardSpeaker::class) ->middleware('auth');
Route::resource('/dashboard/ourTeam', DashboardTeam::class) ->middleware('auth');
Route::resource('/dashboard/gambar', DashboardGambar::class) ->middleware('auth');

Route::get('/login', [Logincontrol::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Logincontrol::class, 'authenticate']);
Route::post('/logout', [Logincontrol::class, 'logout']);

Route::get('/register', [Registercontrol::class, 'index'])->middleware('guest');
Route::post('/register', [Registercontrol::class, 'store']);

