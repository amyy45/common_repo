<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function sneha()
    {
        return view('sneha');
    }
    public function likhitha()
    {
        return view('likhitha');
    }
    public function reethika()
    { 
        return view('reethika');
        
    }
    public function vidhu()
    { 
        return view('vidhu');
    }
}
