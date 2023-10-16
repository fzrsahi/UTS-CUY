<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showAllProducts()
    {
        $products = Product::all();
        return view("product", [
            'title' => 'Product List',
            'products' => $products
        ]);
    }

    public function showAllProductsManagement()
    {
        $products = Product::all();
        return view("product-management", [
            'title' => 'Product List',
            'products' => $products
        ]);
    }
}
