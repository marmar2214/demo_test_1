<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $default=[
            'title' => 'dashboard',
            'active'=> 'dashboard',
        ];
        return view('home', $default);
    }
}
