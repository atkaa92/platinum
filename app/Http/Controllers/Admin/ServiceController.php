<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function getService($id)
    {
        $service = Service::find($id);
        return view('admin.service')->with(compact('service'));
    }

    public function updateService($id)
    {
        dd(request()->all());
    }
}
