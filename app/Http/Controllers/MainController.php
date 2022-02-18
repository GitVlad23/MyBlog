<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function stack()
    {
        return view('stack');
    }

    public function contact()
    {
        return view('contact');
    }
}
