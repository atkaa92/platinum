<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function filterProducts($make = true, $model = true, $yFrom = true, $yTo = true, $mech = true, $auto = true, $other = true, $fPrice = true, $tPrice = true)
    {
        $filterProducts = Product::with(['models'])
                                    ->where('manufacture', $make)
                                    ->whereHas('models', function ($query) use($model)
                                        {$query->where('en_name', $model);})
                                    ->whereBetween('year', [$yFrom, $yTo])
                                    ->where(function($q) use($mech, $auto, $other){
                                        $q->where('gearbox', $mech);
                                        $q->where('gearbox', $auto);
                                        $q->where('gearbox', $other);
                                      })
                                    ->whereBetween('price', [$fPrice, $tPrice])
                                    ->get();
        dd($filterProducts);
    }
}
