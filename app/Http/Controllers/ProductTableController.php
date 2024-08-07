<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductTableController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();

        return view('product-table', ['products' => $products]);
    }
}
