<?php

namespace App\Http\Controllers;

use App\Models\Help;
use App\Models\Join;
use App\Models\Post;
use App\Models\About;
use App\Models\Hired;
use App\Models\Option;
use App\Models\Review;
use App\Models\Article;
use App\Models\Program;
use App\Models\Category;
use App\Models\Homepage;
use App\Models\Aboutjudul;
use Illuminate\Http\Request;

class Postcontrol extends Controller
{

    public function show(Article $article) {
        return view('posts.news', [
            "title" => "Article Post",
            "article" => $article
        ]);
    }

    public function index ()
    {
        return view('home', [
            "title" => "DENTS.TALK",
            "hireds" => Hired::content(),
            "joins" => Join::content(),
            "programs" => Program::content(),
            "help" => Help::content(),
            "review" => Review::content(),
 #           "reviews_2" => Review::review2(),
            "options" => Option::content(),
            'aboutjudul'=>Aboutjudul::content(),
            "homepage" => Homepage::content(),
           "articles" => Article::content()]);

    }

    public function article() {
        return view('posts.index', [
            "title" => "Article",
            "post" => Article::all(),
            "categories" => Category::all()
        ]);
    }
}
