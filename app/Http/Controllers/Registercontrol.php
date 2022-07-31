<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Article;
use App\Models\Program;
use PharIo\Manifest\Email;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class Registercontrol extends Controller
{
    public function index()
    {
        return view('Login.register', [
            'title' => 'Registers',
            "programs" => Program::content(),
            "articles" => Article::content()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'umur' => 'required|max:50',
            'NPA' => 'required|max:255',
            'nohp' => 'required|max:25',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect('/login')->with('success', 'Daftar Berhasil, Silahkan Login');
    }
}
