<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Model;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function filterProducts($make = false, $model = false, $yFrom = false, $yTo = false, $mech = false, $auto = false, $other = false, $fPrice = false, $tPrice = false)
    {
        $filterProducts = Product::with(['models', 'manufacturer'])->where('buyed', 0)
            ->where('in_store',1);
        if($make != 'make'){
            $filterProducts = $filterProducts->where('manufacture', $make);
        }
        if($model != 'model'){
            $filterProducts = $filterProducts->where('model_id', $model);
        }
        if($yFrom != 'yfrom'){
            $filterProducts = $filterProducts->where('year', '>=' , substr($yFrom,6));
        }
        if($yTo != 'yto'){
            $filterProducts = $filterProducts->where('year', '<=' , substr($yTo,6));
        }
        if($fPrice != 'fprice'){
            $filterProducts = $filterProducts->where('price', '>=' , $fPrice);
        }
        if($tPrice != 'tprice'){
            $filterProducts = $filterProducts->where('price', '<=' , $tPrice);
        }
        if($mech != 'all' || $auto != 'all' || $other != 'all'){
            $gearbox = [ $mech, $auto, $other ];
            $filterProducts = $filterProducts->whereIn('gearbox', $gearbox);
        }
        $filterProductsCount = $filterProducts->count();
        $filterProducts = $filterProducts->paginate(6)->setPath('/shop/'.request()->path());
        $links = $filterProducts->links();
        return view('ui.includes.filterProducts')->with(compact('filterProducts', 'filterProductsCount', 'links'));
    }

    public function getMakeModels($id)
    {
        $models = Model::where('mark_id', $id)->get();
        return view('ui.includes.selectpicker')->with(compact('models'));
    }
}
