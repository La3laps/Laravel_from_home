<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsByNameController extends Controller
{
    public function getProducts()
    {
        $products = Product::orderBy('name')->get();

        return view('product-table', ['products' => $products]);
    }
}
