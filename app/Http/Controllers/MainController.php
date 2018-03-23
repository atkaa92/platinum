<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $abouts = About::get();
        $services = Service::get();
        $data = [
            'abouts' => $abouts,
            'services' => $services
        ];
        return view('ui.index')->with($data);
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
