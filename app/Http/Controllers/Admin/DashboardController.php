<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function getAbout($id)
    {
        $about = About::find($id);
        return view('admin.about')->with(compact('about'));
    }

    public function updateAbout($id)
    {
        $about = About::find($id);
        $about->hy_title = request('hy_title');
        $about->hy_desc = request('hy_desc');
        $about->en_title = request('en_title');
        $about->en_desc = request('en_desc');
        $about->ru_title = request('ru_title');
        $about->ru_desc = request('ru_desc');
        $about->save();
        return redirect()->back()->with('success','About updated!');
    }
}
