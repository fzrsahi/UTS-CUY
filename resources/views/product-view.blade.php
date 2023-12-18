@extends('layouts.main')
@section('container')
    <div class="container ">
        <div class="card mb-4 text-center" style="max-width: 5140px; height: 302px;">
            <div class="row g-0 ">
                <div class="col-md-4 bg-dark" style="height: 500px;">
                    @if (filter_var($product->photo, FILTER_VALIDATE_URL))
                        <img src="{{ $product->photo }}" class="card-img-top mw-100 h-100 object-fit-fill " alt="...">
                    @else
                        <img src="{{ asset('product-photos/' . $product->photo) }}"
                            class="card-img-top mw-100 h-100 object-fit-fill " alt="...">
                    @endif
                </div>
                <div class="col-md-8 bg-light">
                    <div class="card-body  text-dark">
                        <h1 class="card-title" style="margin: 120px">Nama : {{ $product->nama }}</h1>
                        <h5 class="card-tittle" style="margin-top: -90px">Deskripsi : {{ $product->deskripsi }} </h5>
                        <h4 class="card-tittle text-danger" style="margin-top: 30px">Stok : {{ $product->qty }} </h4>
                        <p class="card-text"><small class="text-light">Last updated 3 mins ago</small></p>

                        <a href="/products-management/{{ $product['id'] }}" class="btn text-light d-sm-block bg-primary"
                            style="margin-bottom: -80px">EDIT</a>
                        <a href="/products" class="btn text-light d-sm-block bg-danger" style="margin-top: 90px">KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
