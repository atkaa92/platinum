<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function filterProducts($make = true, $model = true, $yFrom = true, $yTo = true, $mech = true, $auto = true, $other = true, $fPrice = true, $tPrice = true)
    {
        $filterProducts = Product::with(['model'])
                                    ->where('', $make)
                                    ->whereHas('model', function ($query) 
                                        {$query->where('', $model);})
                                    ->whereBetween('', [$yFrom, $yTo])
                                    ->where(function($q){
                                        $q->where('', $mech);
                                        $q->where('', $auto);
                                        $q->where('', $other);
                                      })
                                    ->whereBetween('', [$fPrice, $tPrice])
                                    ->get();
        dd($filterProducts);
    }
}
