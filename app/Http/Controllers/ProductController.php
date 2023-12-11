<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;


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
        $products = Product::orderBy("created_at", "desc")->get();
        return view("product-management", [
            'title' => 'Product List',
            'products' => $products
        ]);
    }

    public function insertProduct(Request $request)
    {
        $data = Product::create($request->all());
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('product-photos/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route("products-management")->with("success", "Data berhasil ditambahkan");
    }
}
