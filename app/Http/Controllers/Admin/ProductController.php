<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function addProduct()
    {
        return view('admin.new-product');
    }

    public function allProducts()
    {
        return view('admin.all-products');
    }

    public function getManufactures()
    {
        $manufactures = Manufacturer::get();
        return view('admin.manufacturers')->with(compact('manufactures'));
    }

    public function saveManufactures(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        foreach($data as $id => $values){
            $manufacture = Manufacturer::find($id) ? Manufacturer::find($id) : new Manufacturer();
            $manufacture->en_name = $values['en_name'];
            $manufacture->ru_name = $values['ru_name'];
            $manufacture->hy_name = $values['hy_name'];
            $manufacture->save();
        }
        $manufactures = Manufacturer::get();
        return redirect()->back()->with('success','Brands list updated successfully!');
    }

    public function removeManufacturerById($id)
    {
        $manufacture = Manufacturer::find($id);
        if(!$manufacture){
            return redirect()->back()->with('error','Brand not faund! Something is wrong!');
        }

        if($manufacture->delete()){
            return redirect()->back()->with('success','Brand successfully removed from brand list!');
        };
    }
}
