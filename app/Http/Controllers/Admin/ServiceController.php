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
        $currPage = 'services';
        return view('admin.service')->with(compact('service', 'currPage'));
    }

    public function updateService($id)
    {
        $service = Service::find($id);
        $service->hy_title = request('hy_title');
        $service->hy_desc_title = request('hy_desc_title');
        $service->hy_desc = request('hy_desc');
        $service->hy_features_title = request('hy_features_title');
        $service->hy_features = serialize(request('hy_features'));
        $service->en_title = request('en_title');
        $service->en_desc_title = request('en_desc_title');
        $service->en_desc = request('en_desc');
        $service->en_features_title = request('en_features_title');
        $service->en_features = serialize(request('en_features'));
        $service->ru_title = request('ru_title');
        $service->ru_desc_title = request('ru_desc_title');
        $service->ru_desc = request('ru_desc');
        $service->ru_features_title = request('ru_features_title');
        $service->ru_features = serialize(request('ru_features'));
        $service->save();
        return redirect()->back()->with('success','Service updated!');
    }
}
