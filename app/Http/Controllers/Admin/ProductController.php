<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use App\Models\Model;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function addProduct()
    {
        $gen_id = false;
        $manufacturers = Manufacturer::get();
        $currPage = 'products';
        return view('admin.new-product')->with(compact('manufacturers', 'currPage', 'gen_id'));
    }

    public function allProducts()
    {
        $currPage = 'products';
        return view('admin.all-product')->with(compact('currPage'));
    }

    public function addOrEditProductFunc(Request $request, $id = null)
    {
        $model = $id ? Product::find($id) : new Product();
        $data = $request->all();
        $model->en_desc = $data['en_desc'];
        $model->ru_desc = $data['ru_desc'];
        $model->hy_desc = $data['hy_desc'];
        $model->hy_desc = $data['hy_desc'];
        $model->interior = isset($data['interior']) ? $data['interior'] : '';
        $model->fuel = isset($data['fuel']) ? $data['fuel'] : '';
        $model->main_image = isset($data['main_image']) ? $data['main_image'] : $data['product-image'][0];
        $model->images = serialize($data['product-image']);
        $model->in_store = isset($data['in-store']) ? 1 : 0;
        $model->urgent = isset($data['urgent']) ? 1 : 0;
        $model->color = $data['color'];
        $model->year = $data['year'];
        $model->price = $data['price'];
        $model->odometer = $data['odometer'];
        $model->doors = $data['doors'];
        $model->gearbox = $data['gearbox'];
        $model->body = $data['body'];
        $model->body = $data['location'];
        $model->manufacture = $data['manufacture'];
        $model->mark_id = $data['model'];

        if($model->save()){
            return redirect()->back()->with('success', 'Product successfully created!');
        }
        return redirect()->back()->with('error', 'Server Error!');
    }

    public function getManufactures()
    {
        $manufactures = Manufacturer::get();
        $currPage = 'manifactures';        
        return view('admin.manufacturers')->with(compact('manufactures', 'currPage'));
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

    public function addNewModelByBrandId(Request $request)
    {
        $model = Model::create($request->all());
        return $model->id;
    }

    public function getAllModelsByBrandId($id)
    {
        $models = Model::where('mark_id',$id)->get();
        $div = "";
        foreach ($models as $model){
            $div .= "<option value='$model->id'>$model->en_name</option>";
        }
        return $div;
    }
}
