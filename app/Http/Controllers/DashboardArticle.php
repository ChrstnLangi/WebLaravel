<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardArticle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.article.index",[
            'article'=>Article::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        return view("dashboard.article.create",[
            'article'=>Article::all(),
            'category'=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            'category_id' => 'required',
            'image' => 'required',
            'body'=> 'required',
            'slug'=> 'required'

        ]);


        $validatedData['title'] = $request->title;
        $validatedData['image'] = $request->file('image')->store('image');
        $validatedData['author'] = auth()->user()->nama;
        $validatedData['body'] = Str::limit($request->body, 1000);
        $validatedData['date'] = date('Y-m-d');

        // return $validatedData;
        Article::create($validatedData);
        return redirect('/dashboard/article/')->with('success', 'Create Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article, Category $category)
    {
        return view("dashboard.article.edit",[
            'article' => $article,
            'category'=> Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            'category_id' => 'required',
            'image' => 'required',
            'body'=> 'required',
            'slug'=> 'required'
        ]);

        $validatedData['title'] = $request->title;
        $validatedData['image'] = $request->file('image')->store('image');
        $validatedData['body'] = Str::limit($request->body, 1000);

        if(isset($request['image'])){
            if(isset($request['oldImage'])){
                Storage::delete($request['oldImage']);
            }
            $validatedData['image'] = $request->file('image')->store('image');
            Article::where('id', $article->id)
                    ->update($validatedData);
        return redirect('/dashboard/article/')->with('success', 'Update Success');
        }
        else{
            Article::where('id', $article->id)
            ->update($validatedData);
            return redirect('/dashboard/article/')->with('success', 'Update Success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if($article->img){
            Storage::delete($article->img);
        }

        Article::destroy($article->id);
        return redirect('/dashboard/article/')->with('success', 'Delete Success');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
