<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Text;
use App\Models\Gambar;
use App\Models\Comment;
use Illuminate\Http\Request;

class DashboardAbout extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function index(Page $page)
    {
        return view('dashboard.about.index', [
            'page' => Page::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function create(Page $page)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Page $page)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page, Text $text)
    {

        dd($page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page, Text $text, Gambar $gambar, Comment $comment)
    {
        $text = $page->Text;
        $gambar = $page->Gambar;
        return view('dashboard.about.edit', [
            'page' => $page,
            'text' => $text,
            'gambar' => $gambar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page, Text $text)
    {
        $text = $page->Text;
        foreach ($text as $text){
            Text::where('id', $text->id)
                ->update(['text'=> $request['text'.''.$text->id]]);
        }

        return redirect('/dashboard/page/')->with('success', 'Berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page, Text $text)
    {
        //
    }
}
