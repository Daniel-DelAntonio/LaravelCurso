<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Daniel';
        $habit = ['Ler,', 'Estudar', 'Programar', 'Desenhar'];
        return view(view: 'home', data: compact('name', 'habit'));
    }
}
