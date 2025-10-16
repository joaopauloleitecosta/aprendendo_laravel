<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() 
    {
        $mostraRodape = true;
        return view('home', ['mostraRodape' => $mostraRodape]);
    }

    public function services() 
    {
        $titulo = 'Meu site - Serviços ' . rand(0,10);
        return view('services', ['titulo' => $titulo]);
    }

    public function contact()
    {
        $dataAtual = date('d/m/Y');
        return view('contact', ['dataAtual' => $dataAtual]);
    }
}
