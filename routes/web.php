<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductTableController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsByPriceController;
use App\Http\Controllers\ProductsByNameController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/ChaleurDT/product', [ProductController::class, 'product']);

Route::get('/ChaleurDT/product/{id}', [ProductController::class, 'productSpecific']);

Route::get('/ChaleurDT/cart', [CartController::class, 'cart']);

Route::get('/ChaleurDT/product-table', [ProductTableController::class, 'getProducts']);

Route::get('/ChaleurDT/backoffice', [BackofficeController::class, 'indexBackoffice']);

Route::post('/ChaleurDT/product-table/ByName', [ProductsByNameController::class, 'getProducts']);

Route::post('/ChaleurDT/product-table/ByPrice', [ProductsByPriceController::class, 'getProducts']);
