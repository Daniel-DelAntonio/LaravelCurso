<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Daniel';
        $study = ['PHP', 'Laravel', 'JavaScript', 'Vue.js'];
        return view(view: 'home', data: compact('name', 'study'));
    }
}
