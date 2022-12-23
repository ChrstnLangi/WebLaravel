<?php

use App\Models\Web;
use App\Models\Page;
use App\Models\About;
use App\Models\Article;
use App\Models\OurTeam;
use App\Models\Program;
use App\Models\Category;
use App\Models\OurSpeaker;
use App\Http\Controllers\Daftar;
use App\Http\Controllers\NewAbout;
use App\Http\Controllers\internship;
use App\Http\Controllers\Postcontrol;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Logincontrol;
use App\Http\Controllers\DashboardTeam;
use App\Http\Controllers\DashboardAbout;
use App\Http\Controllers\DashboardGambar;
use App\Http\Controllers\Registercontrol;
use App\Http\Controllers\DashboardArticle;
use App\Http\Controllers\DashboardSpeaker;
use App\Http\Controllers\DashboardCategory;
use App\Http\Controllers\DashboardReviewer;

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
})->middleware(['auth', 'RoleAdmin']);

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

Route::resource('/pendaftaran', Daftar::class)->middleware(('auth'));


Route::resource('/dashboard/page', DashboardAbout::class) ->middleware(['auth', 'RoleAdmin']);
Route::resource('/dashboard/ourSpeaker', DashboardSpeaker::class) ->middleware(['auth', 'RoleAdmin']);
Route::resource('/dashboard/ourTeam', DashboardTeam::class) ->middleware(['auth', 'RoleAdmin']);
Route::resource('/dashboard/gambar', DashboardGambar::class) ->middleware(['auth', 'RoleAdmin']);
Route::resource('/dashboard/reviewer', DashboardReviewer::class) ->middleware(['auth', 'RoleAdmin']);
Route::resource('/dashboard/article', DashboardArticle::class) ->middleware(['auth', 'RoleAdmin']);
Route::resource('/dashboard/category', DashboardCategory::class) ->middleware(['auth', 'RoleAdmin']);

Route::get('/dashboard/checkSlug', [DashboardArticle::class, 'checkSlug'])->middleware(['auth', 'RoleAdmin']);
Route::get('/dashboard/c/checkSlug', [DashboardCategory::class, 'checkSlug'])->middleware(['auth', 'RoleAdmin']);


Route::get('/login', [Logincontrol::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Logincontrol::class, 'authenticate']);
Route::post('/logout', [Logincontrol::class, 'logout']);

Route::get('/register', [Registercontrol::class, 'index'])->middleware('guest');
Route::post('/register', [Registercontrol::class, 'store']);
