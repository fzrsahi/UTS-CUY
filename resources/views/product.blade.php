@extends('layouts.main')
@section('container')
    <div class="page-heading">
        <h3>Daftar Produk </h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Daftar Produk</h5>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                @foreach ($products as $product)
                                    <div class="card col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2  ">
                                        <div class="card-content">
                                            <img src="{{ $product->photo }}" alt="{{ $product->nama }}"
                                                style="width:200px; height:145px; object-fit:cover;">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $product->nama }}</h5>
                                                <p class="card-text">
                                                    {{ $product->deskripsi }}
                                                </p>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush mb-5">
                                            <li class="list-group-item">Price : {{ $product->harga }}</li>
                                            <li class="list-group-item">Stok : {{ $product->qty }} Pcs</li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
