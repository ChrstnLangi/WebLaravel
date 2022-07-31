<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontrol extends Controller
{
    public function index()
    {
        return view('Login.login', [
            'title' => 'Login',
            "programs" => Program::content(),
            "articles" => Article::content()
        ]);
    }

    public function authenticate(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($cred)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Gagal');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
