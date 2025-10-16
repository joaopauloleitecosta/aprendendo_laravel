<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() 
    {
        $mostraRodape = true;
        $userType = 'admin';

        return view('home', ['mostraRodape' => $mostraRodape, 'userType' => $userType]);
    }

    public function services() 
    {
        $titulo = 'Meu site - Serviços ' . rand(0,10);
        
        $services = [
            ['name' => 'serviço 01', 'description' => 'descrição 01'] ,
            ['name' => 'serviço 02', 'description' => 'descrição 02']
        ];

        $repiticoes = 0;

        return view('services', ['titulo' => $titulo, 'services' => $services, 'repeticoes' => $repiticoes]);
    }

    public function contact()
    {
        $dataAtual = date('d/m/Y');
        return view('contact', ['dataAtual' => $dataAtual]);
    }
}
