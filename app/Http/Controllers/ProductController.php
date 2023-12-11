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
        return redirect()->route("products-management")->with("sukses", "Data berhasil ditambahkan");
    }

    public function editproduct($id){
        $data= Product::find($id);
        return view('product-edit', compact('data'));
    }

    public function updateproduct(Request $request, $id){
        $data= Product::find($id);
        $data->update($request->all());
        if($request->hasFile('photo')){
            // dd($request-> file('foto'));
            $request-> file('photo')->move('product-photos/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }
        $data->save();
        return redirect()->route('products-management')->with('sukses','Data Sudah Ter Edit !!!');
    }

    public function delete ($id){
        $data= Product::find($id);
        $data-> delete();
        return redirect()->route('products-management')->with('sukses','Data Telah Di Hapus !!!');
    }

}
