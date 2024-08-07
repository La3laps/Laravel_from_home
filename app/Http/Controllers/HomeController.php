<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $temperature = rand(0, 9);
        return view('homepage', ['temperature' => $temperature]);
    }
}
