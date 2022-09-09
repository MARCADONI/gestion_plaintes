<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function take1()
    {
        return view('PageAcceuil');
    }
    public function take2()
    {
        return view('PageSoumettre');
    }
    public function take3()
    {
        return view('PageStatistique');
    }
    public function take4()
    {
        return view('PageContact');
    }
    public function take5()
    {
        return view('PageConnexion');
    }
}
