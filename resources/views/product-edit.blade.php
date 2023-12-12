@extends('layouts.main')
@section('container')
    <div class="pDeskripsi-heading">
        <h3>Edit Produk </h3>
    </div>
    <form action="/updateproduct/{{$data->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <label for="product-name">Nama Produk : </label>
            <div class="form-group">
                <input id="product-name" type="text" placeholder="Nama Produk" class="form-control" name="nama" value="{{$data->nama}}">
            </div>
            <label for="harga">Harga : </label>
            <div class="form-group">
                <input id="harga" type="number" placeholder="Harga" class="form-control" name="harga" value="{{$data->harga}}">
            </div>
            <label for="stok">Stok : </label>
            <div class="form-group">
                <input id="stok" type="number" placeholder="Stok" class="form-control" name="qty" value="{{$data->qty}}">
            </div>
            <label for="kategori">Kategori: </label>
            <div class="form-group">
                <input id="kategori" type="text" placeholder="Kategori" name="kategori" class="form-control"
                    value="{{$data->kategori}}">
            </div>
            <label for="deskripsi">Deskripsi: </label>
            <div class="form-group">
                <input id="deskripsi" type="text" placeholder="Deskrpisi" name="deskripsi" class="form-control"
                    value="{{$data->deskripsi}}">
            </div>
            <label for="photo">Foto: </label>
            <div class="form-group">
                <input type="file" name="photo" class="form-control" >Foto Sebelumnya : {{$data->photo}}
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
