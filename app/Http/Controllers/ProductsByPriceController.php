<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsByPriceController extends Controller
{
    public function getProducts()
    {
        $products = Product::orderBy('price')->get();

        return view('product-table', ['products' => $products]);
    }
}
