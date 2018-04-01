<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Finace;
use App\Models\Manufacturer;
use App\Models\Model;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function addProduct($id = false)
    {
        $gen_id = $id;
        $edit_data = $id ? Product::find($id) : false;
        $manufacturers = Manufacturer::get();
        $currPage = 'products';
        return view('admin.new-product')->with(compact('manufacturers', 'currPage', 'gen_id', 'edit_data'));
    }

    public function allProducts()
    {
        $manufacturers = Manufacturer::get();
        $currPage = 'products';
        $products = Product::orderBy('id','desc')->paginate(20);
        return view('admin.all-products')->with(compact('currPage','products', 'manufacturers'));
    }

    public function filter($manufacture, $sold, $model = false)
    {
        $sold = explode(',',$sold);
        $products = Product::whereIn('buyed', $sold);

        if($manufacture){
            $products = $products->where('manufacture',$manufacture);
        }
        if($model){
            $products = $products->where('model_id', $model);
        }
        $products = $products->paginate(20);

        return view('admin.includes.products-list', array('products' => $products));

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
        $model->main_image = isset($data['main-image']) ? $data['main-image'] : $data['product-image'][0];
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
        $model->location = $data['location'];
        $model->manufacture = $data['manufacture'];
        $model->model_id = $data['model'];

        if($model->save()){
            return redirect()->back()->with('success', $id ? 'Product successfully updated!' : 'Product successfully created!');
        }
        return redirect()->back()->with('error', 'Server Error!');
    }

    public function buyProduct($id, $price){
        $product = Product::find($id);
        if($product->buyed){
            return redirect()->back()->with('error', 'This product already sold!');
        }
        $product->buyed = 1;

        $model = new Finace();
        $model->product_id = $id;
        $model->price = $price;

        if($model->save() && $product->save()){
            return redirect()->back()->with('success', 'Successfully updated!');
        }
        return redirect()->back()->with('error', 'Something is wrong!');
    }

    public function removeProduct($id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect()->back()->with('error', 'Something is wrong!');
        }

        if($product->delete()){
            return redirect()->back()->with('success', 'Product successfully removed');
        }else{
            return redirect()->back()->with('error', 'Something is wrong!');
        }
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
