<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoresupplierRequest;
use App\Http\Requests\UpdatesupplierRequest;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showAllSuppliers()
    {
        $suppliers = Supplier::all();
        return view("supplier", [
            'title' => 'Supplier List',
            'suppliers' => $suppliers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresupplierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesupplierRequest $request, supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(supplier $supplier)
    {
        //
    }

    public function insertSupplier(Request $request)
    {
        $data = Supplier::create($request->all());
        return redirect()->route("suppliers")->with("sukses", "Data berhasil ditambahkan");
    }

    public function deleteSupplier($id){
        $data= Supplier::find($id);
        $data-> delete();
        return redirect()->route('suppliers')->with('sukses','Data Telah Di Hapus !!!');
    }

    public function editSupplier($id){
        $data= Supplier::find($id);
        return view('supplier-edit', compact('data'));
    }

    public function updateSupplier(Request $request, $id){
        $data= Supplier::find($id);
        $data->update($request->all());
        $data->save();
        return redirect()->route('suppliers')->with('sukses','Data Sudah Ter Edit !!!');
    }
}
