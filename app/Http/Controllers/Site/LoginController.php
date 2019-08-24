<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }
    //
    public function entrar(Request $req)
    {
        $dados = $req->all();
        if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])){
            return redirect()->route('admin.pessoas');
        }
        return redirect()->route('login.index');
    }
    //
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
