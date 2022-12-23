<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Reviewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardReviewer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function index(Page $page, Reviewer $reviewer)
    {
        $page = Reviewer::select('page_id')->distinct()->get();
        {
            return view('dashboard.review.index', [
                'page' =>  $page
            ]);
        }
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
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page, Reviewer $reviewer)
    {
        $page = Page::where('id', $reviewer->id)->get();
        return $page;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page, Reviewer $reviewer)
    {
        $page = Page::where('id', $reviewer->page_id)->get();
        $review = Reviewer::where('page_id', $reviewer->id)->get();
        $page = $review->first()->Page;
        return view('dashboard.review.edit', [
            'page' => $page,
            'review' => $review
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page, Reviewer $reviewer)
    {
        $page = $reviewer;
        $review = Reviewer::where('page_id', $reviewer->id)->get();
        $data = $request;




        for ($i = 0; $i<$review->count(); $i++){
            $validatedData = $request->validate([
                'nama'.''.$review->skip($i)->first()->id=> 'required',
                'text'.''.$review->skip($i)->first()->id=>'required',
                'image'.''.$review->skip($i)->first()->id=>'image:file',
                'role'.''.$review->skip($i)->first()->id => 'required'
            ]);

            // if(isset($data['image'.''.$review->skip($i)->first()->id])){
            //     if(isset($data['oldImage'.''.$review->skip($i)->first()->id])){
            //         Storage::delete($data['oldImage'.''.$review->skip($i)->first()->id]);
            //     }
            //     $data = $data->file('image'.''.$review->skip($i)->first()->id)->store('image');
            //     Reviewer::where('id', $review->skip($i)->first()->id)
            //      ->update(['img'=> $data]);
            // }

            if(isset($request['image'.''.$review->skip($i)->first()->id])){
                if(isset($request['oldImage'])){
                    Storage::delete($request['oldImage']);
                }
                $validatedData = $request->file('image'.''.$review->skip($i)->first()->id)->store('image'.''.$review->skip($i)->first()->id);
                Reviewer::where('id', $review->skip($i)->first()->id)
                        ->update(['img' => $validatedData]);
                return redirect('/dashboard/reviewer/'.''.$page->id.'/edit')->with('success', 'Berhasil diupdate');
            }
            else{
                $validatedData = $request->validate([
                    'nama'.''.$review->skip($i)->first()->id=> 'required',
                    'text'.''.$review->skip($i)->first()->id=>'required',
                    'role'.''.$review->skip($i)->first()->id => 'required',
                    'link'.''.$review->skip($i)->first()->id
                ]);

                Reviewer::where('id', $review->skip($i)->first()->id)
                ->update(['nama' => $validatedData['nama'.''.$review->skip($i)->first()->id],
                          'text' => $validatedData['text'.''.$review->skip($i)->first()->id],
                          'role' => $validatedData['role'.''.$review->skip($i)->first()->id]]);
                return redirect('/dashboard/reviewer/'.''.$page->id.'/edit')->with('success', 'Berhasil diupdate');
            }

        }
        // foreach ($review as $review){
        //     if(isset($request['image'.''.$review->id])){
        //         if(isset($request['oldImage'.''.$review->id])){
        //             Storage::delete($request['oldImage'.''.$review->id]);
        //         }
        //         $request = $request->file('image'.''.$review->id)->store('image');
        //         Reviewer::where('id', $review->id)
        //          ->update(['img'=> $request]);
        //     }



        // }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page, Reviewer $reviewer)
    {
        //
    }
}
