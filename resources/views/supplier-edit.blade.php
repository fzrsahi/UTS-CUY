@extends('layouts.main')
@section('container')
    <div class="pDeskripsi-heading">
        <h3>Edit Supplier </h3>
    </div>
    <form action="/updatesupplier/{{$data->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <label for="product-name">Nama Produk : </label>
            <div class="form-group">
                <input id="product-name" type="text" placeholder="Nama Produk" class="form-control" name="nama" value="{{$data->nama}}">
            </div>
            <label for="harga">Email : </label>
            <div class="form-group">
                <input id="Email" type="text" placeholder="Email" class="form-control" name="nomor_telepon" value="{{$data->nomor_telepon}}">
            </div>
            <label for="stok">Alamat : </label>
            <div class="form-group">
                <input id="alamat" type="text" placeholder="Alamat" class="form-control" name="qty" value="{{$data->alamat}}">
            </div>
           
          
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <a href="/products-management" class="d-none text-white d-sm-block">Cancel</a>
            </button>
            <button type="submit" class="btn btn-primary ms-1">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Simpan</span>
            </button>
        </div>
    </form>
@endsection
