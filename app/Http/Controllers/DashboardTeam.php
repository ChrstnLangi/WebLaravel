<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardTeam extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.team.index",[
            'team'=>OurTeam::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.team.create",[
            'team'=>Team::all()
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
            'role'=>'required',
            'img' => 'required',
            'team_id' => 'required'
        ]);

        $validatedData['img'] = $request->file('img')->store('image');

        OurTeam::create($validatedData);
        return redirect('/dashboard/ourTeam/create')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function show(OurTeam $ourTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(OurTeam $ourTeam)
    {
        return view("dashboard.team.edit",[
            'our' => $ourTeam,
            'team'=> Team::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurTeam $ourTeam)
    {
        $validatedData = $request->validate([
            'nama'=> 'required',
            'role'=>'required',
            'team_id' => 'required'
        ]);

        if(isset($request['img'])){
            if(isset($request['oldImage'])){
                Storage::delete($request['oldImage']);
            }
            $validatedData['img'] = $request->file('img')->store('image');
            OurTeam::where('id', $ourTeam->id)
                    ->update($validatedData);
        return redirect('/dashboard/ourTeam/')->with('success', 'Update Success');
        }
        else{
            OurTeam::where('id', $ourTeam->id)
            ->update($validatedData);
            return redirect('/dashboard/ourTeam/')->with('success', 'Update Success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurTeam $ourTeam)
    {
        //
    }
}
