<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function contato()
    {
        return view('site.contato');
    }

    public function sobre()
    {
        return view('site.sobre');
    }
}
