<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home() {
        return view('site.home');
    }

    public function servicos() {
        return view('site.servicos');
    }

    public function galeria() {
        return view('site.galeria');
    }

    public function contato() {
        return view('site.contato');
    }
}
