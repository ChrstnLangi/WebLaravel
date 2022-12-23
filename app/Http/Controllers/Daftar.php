<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\Page;
use App\Models\Pendaftaran;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class Daftar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.daftar.index",[
            'daftar'=> Pendaftaran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Web $web)
    {
        $program = Web::where('judul', 'Program')->get()->first()->Page;
        return view("program.daftar",[
            'program'=> $program,
            'user'=>auth()->user(),
            'title'=> 'Pendaftaran Program'
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
            'page_id'=> 'required',
            'email'=> 'required',
            'nohp'=> 'required',
            'nama'=>'required'
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status'] = 0;

        Pendaftaran::create($validatedData);
        return redirect('/')->with('success', 'Pendaftaran Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        $status = [["id" => 0, "text" => "Belum Dihubungi"],
                   ["id" => 1, "text" => "Menunggu Pembayaran"],
                   ["id" => 2, "text" => "Terkonfirmasi"]];
        $program = Web::where('judul', 'Program')->get()->first()->Page;
        return view("dashboard.daftar.edit",[
            'program'=> $program,
            'daftar' => $pendaftaran,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $validatedData = $request->validate([
            'nama'=> 'required',
            'page_id'=> 'required',
            'email' => 'required',
            'nohp' => 'required',
            'status' => 'required'
        ]);

            Pendaftaran::where('id', $pendaftaran->id)
            ->update($validatedData);
            return redirect('/pendaftaran/')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        Pendaftaran::destroy($pendaftaran->id);
        return redirect('/pendaftaran/')->with('success', 'Delete Success');
    }
}
