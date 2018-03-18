<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('ui.index');
    }


    public function shop()
    {
        return view('ui.shop');
    }

    public function inner()
    {
        return view('ui.inner');
    }
}
