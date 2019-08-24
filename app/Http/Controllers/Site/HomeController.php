<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pessoa;

class HomeController extends Controller
{
    //
    public function index()
    {
        $pessoas = Pessoa::paginate(2);
        return view('home',compact('pessoas'));
    }
}
