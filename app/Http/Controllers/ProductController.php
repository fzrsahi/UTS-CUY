<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showAllProducts()
    {
        return view("product");
    }

    public function showAllProductsManagement()
    {
        return view("product-management");
    }
}
