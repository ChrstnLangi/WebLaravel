<?php

namespace App\Http\Controllers;

use App\Models\OurSpeaker;
use App\Models\Speaker;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Storage;

class DashboardSpeaker extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.speaker.index",[
            'speaker'=>OurSpeaker::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.speaker.create",[
            'speaker'=>Speaker::all()
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
            'nama'=> 'required',
            'text'=>'required',
            'img' => 'required',
            'speaker_id' => 'required'
        ]);

        $validatedData['img'] = $request->file('img')->store('image');

        OurSpeaker::create($validatedData);
        return redirect('/dashboard/ourSpeaker/')->with('success', 'Create Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurSpeaker  $ourSpeaker
     * @return \Illuminate\Http\Response
     */
    public function show(OurSpeaker $ourSpeaker)
    {
        return view("dashboard.speaker.edit",[
            'speaker'=>Speaker::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurSpeaker  $ourSpeaker
     * @return \Illuminate\Http\Response
     */
    public function edit(OurSpeaker $ourSpeaker)
    {
        return view("dashboard.speaker.edit",[
            'our' => $ourSpeaker,
            'speaker'=> Speaker::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurSpeaker  $ourSpeaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurSpeaker $ourSpeaker)
    {
        $validatedData = $request->validate([
            'nama'=> 'required',
            'text'=>'required',
            'img'=>'image:file',
            'speaker_id' => 'required'
        ]);

        if(isset($request['img'])){
            if(isset($request['oldImage'])){
                Storage::delete($request['oldImage']);
            }
            $validatedData['img'] = $request->file('img')->store('image');
            OurSpeaker::where('id', $ourSpeaker->id)
                    ->update($validatedData);
        return redirect('/dashboard/ourSpeaker/')->with('success', 'Update Success');
        }
        else{
            OurSpeaker::where('id', $ourSpeaker->id)
            ->update($validatedData);
            return redirect('/dashboard/ourSpeaker/')->with('success', 'Update Success');
        }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurSpeaker  $ourSpeaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurSpeaker $ourSpeaker)
    {
        if($ourSpeaker->img){
            Storage::delete($ourSpeaker->img);
        }

        OurSpeaker::destroy($ourSpeaker->id);
        return redirect('/dashboard/ourSpeaker/')->with('success', 'Delete Success');
    }
}
