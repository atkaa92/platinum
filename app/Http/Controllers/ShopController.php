<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Model;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function filterProducts($make = false, $model = false, $yFrom = false, $yTo = false, $mech = false, $auto = false, $other = false, $fPrice = false, $tPrice = false)
    {
        $filterProducts = Product::with(['models', 'manufacturer']);
        if($make != 'make'){
            $filterProducts = $filterProducts->where('manufacture', $make);
        }
        if($model != 'model'){
            $filterProducts = $filterProducts->where('model_id', $make);
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
        $filterProducts = $filterProducts->get();
        return view('ui.includes.filterProducts')->with(compact('filterProducts', 'filterProductsCount'));
        // echo json_encode($filterProducts->toSql());
    }

    public function getMakeModels(Request $request)
    {
        $models = Model::select($request->lang.'_name as name', 'id')->where('mark_id', request('make'))->get();
        echo json_encode($models);
    }
}
