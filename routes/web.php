<?php

use App\Models\Web;
use App\Models\Page;
use App\Models\About;
use App\Models\Posts;
use App\Models\Article;
use App\Models\Program;
use App\Models\Category;
use App\Http\Controllers\internship;
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
        "about" => About::content(),
        "articles" => Article::content()
    ]);
})->middleware('auth');

Route::get('/About/company-profile', function(About $About){
    return view('about.company', [
        'title' => "Company Profile"
    ]);
});

Route::get('/About/company-staff', function(About $About){
    return view('about.staff', [
        'title' => "Company Staff"
    ]);
});

Route::get('/sign-in', function(){
    return view('article.webinar_sign', [
        'title' => "Webinar"
    ]);
});

Route::get('/About/{About:slug}', function(About $About){
    return view('about.internship', [
        'title' => $About -> nama,
        'judul' => $About -> Aboutjudul->load('About'),
        'slug' => $About -> slug
    ]);
});



Route::get('/Program/{page:slug}', function(Page $page){
    return view('program.index', [
        'title' => $page -> judul,
        'page' => $page,
        'slug' => $page -> slug
    ]);
})->scopeBindings();

Route::resource('/dashboard/about', internship::class)->middleware('auth');

Route::get('/login', [Logincontrol::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Logincontrol::class, 'authenticate']);
Route::post('/logout', [Logincontrol::class, 'logout']);

Route::get('/register', [Registercontrol::class, 'index'])->middleware('guest');
Route::post('/register', [Registercontrol::class, 'store']);

Route::resource('/dashboard/home/section_1', Dashboardhomesection_1::class)->middleware('auth');

Route::get('Article', [Postcontrol::class, 'article']);

Route::get('Article/{article:slug}', [Postcontrol::class, 'show']);

Route::get('Article/categories/{category:slug}', function(Category $category) {
    return view('posts.category', [
        'title' => $category->name,
        'posts' => $category->post,
        'category' => $category->name,
        'categories' => Category::all()
    ]);
});