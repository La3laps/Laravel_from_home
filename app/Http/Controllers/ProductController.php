<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::all();

        return view('product-list', ["products" => $products]);
    }

    public function productSpecific($id)
    {
        $products = Product::all();

        return view('product-details', ["id" => $id, "products" => $products]);
    }
}
