<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Finace;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Task;
use App\Models\User;
use App\Models\Config;

class DashboardController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        $users = User::count();
        $taskA = Task::where('completed', 0)->count();
        $taskC = Task::where('completed', 1)->count();
        $income = Finace::sum('price');
        $sold = Product::where('buyed', 1)->count();
        $active = Product::where('buyed', 0)->count();
        $data = [
            'currPage' => 'dashboard',
            'tasks' => $tasks,
            'taskA' => $taskA,
            'taskC' => $taskC,
            'users' => $users,
            'income' => $income,
            'sold' => $sold,
            'active' => $active
        ];
        
        return view('admin.index')->with($data);
    }

    public function getAbout($id)
    {
        $about = About::find($id);
        $currPage = 'abouts';
        return view('admin.about')->with(compact('about', 'currPage'));
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

    public function getConfigs()
    {
        $currPage = 'config';
        $configs = Config::first();
        return view('admin.config')->with(compact('currPage', 'configs'));
    }

    public function updateConfigs(Request $request)
    {
        $configs = Config::firstOrNew([]);
        foreach ($request->except(['_token']) as $key => $val) {
            $configs->$key = $val;
        }
        $configs->save();
        return redirect()->back()->with('success', 'Configs updated');
    }
}
