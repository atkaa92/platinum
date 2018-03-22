<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
