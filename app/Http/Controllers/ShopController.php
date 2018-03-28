<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function filterProducts($make = false, $model = false, $yFrom = false, $yTo = false, $mech = false, $auto = false, $other = false, $fPrice = false, $tPrice = false)
    {
        $filterProducts = Product::with(['models']);
        if($make != 'make'){
            $filterProducts = $filterProducts->where('manufacture', $make);
        }
        if($model != 'model'){
            $filterProducts = $filterProducts->whereHas('models', function ($query) use($model){
                                $query->where('en_name', $model);
                                $query->orWhere('hy_name', $model);
                                $query->orWhere('ru_name', $model);
                            });
        }
        if($yFrom != 'yfrom'){
            $filterProducts = $filterProducts->where('year', '>=' , $yFrom);
        }
        if($yTo != 'yto'){
            $filterProducts = $filterProducts->where('year', '>=' , $yTo);
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
        $filterProducts = $filterProducts->get();
        return view('ui.includes.filterProducts')->with(compact('filterProducts'));

        echo json_encode($filterProducts);
    }
}
