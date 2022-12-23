<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGambar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function index(Page $page)
    {
        return view('dashboard.gambar.index', [
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page, Gambar $gambar)
    {
        $page = $gambar->Page;
        $gambar = Gambar::where('page_id', $gambar->page_id)->get();
        return $page;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page, Gambar $gambar)
    {
        $page = $gambar->Page;
        $gambar = Gambar::where('page_id', $gambar->page_id)->get();
        return view('dashboard.gambar.edit', [
            'page' => $page,
            'gambar' => $gambar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page, Gambar $gambar)
    {

        $page = $gambar->Page;
        $gambar = Gambar::where('page_id', $gambar->page_id)->get();
        $data = $request;


        for ($i = 0; $i<$gambar->count(); $i++){
            $data = $request;
            if(isset($data['image'.''.$gambar->skip($i)->first()->id])){
                if(isset($data['oldImage'.''.$gambar->skip($i)->first()->id])){
                    Storage::delete($data['oldImage'.''.$gambar->skip($i)->first()->id]);
                }
                $data = $data->file('image'.''.$gambar->skip($i)->first()->id)->store('image');
                Gambar::where('id', $gambar->skip($i)->first()->id)
                 ->update(['img'=> $data]);
            }

        }
        // foreach ($gambar as $gambar){
        //     if(isset($request['image'.''.$gambar->id])){
        //         if(isset($request['oldImage'.''.$gambar->id])){
        //             Storage::delete($request['oldImage'.''.$gambar->id]);
        //         }
        //         $request = $request->file('image'.''.$gambar->id)->store('image');
        //         Gambar::where('id', $gambar->id)
        //          ->update(['img'=> $request]);
        //     }



        // }

        return redirect('/dashboard/gambar/'.''.$page->id.'/edit')->with('success', 'Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page, Gambar $gambar)
    {
        //
    }
}
