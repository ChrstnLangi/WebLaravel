<?php

use App\Models\About;
use App\Models\Article;
use App\Models\Program;
use App\Http\Controllers\Postcontrol;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontrol;
use App\Http\Controllers\Registercontrol;
use App\Http\Controllers\Dashboardhomesection_1;

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
        "articles" => Article::content()
    ]);
})->middleware('auth');

Route::get('/about/{About:slug}', function(About $About){
    return view('about.internship', [
        'title' => $About -> nama,
        'judul' => $About -> Aboutjudul->load('About'),
        'slug' => $About -> slug
    ]);
});

Route::get('/login', [Logincontrol::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Logincontrol::class, 'authenticate']);
Route::post('/logout', [Logincontrol::class, 'logout']);

Route::get('/register', [Registercontrol::class, 'index'])->middleware('guest');
Route::post('/register', [Registercontrol::class, 'store']);

Route::resource('/dashboard/home/section_1', Dashboardhomesection_1::class)->middleware('auth');

Route::get('/dentslearn', [Postcontrol::class, 'dentslearn']);;
Route::get('/webinar', [Postcontrol::class, 'webinar']);;
Route::get('/dentspractice', [Postcontrol::class, 'dentsprac']);;
Route::get('/company-profile', [Postcontrol::class, 'profile']);;
Route::get('/articles', [Postcontrol::class, 'article']);;
