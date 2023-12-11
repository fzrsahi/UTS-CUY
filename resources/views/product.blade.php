@extends('layouts.main')
@section('container')
    <div class="page-heading">
        <h3>Daftar Produk </h3>
    </div>
    <div class="page-content">
        <section>

            <div>
                <div class="card text-center justify-content-center mx-auto">
                    <div class="card-header">
                        <h5 class="card-title">Daftar Produk</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-center" data-bs-toggle="modal"
                            data-bs-target="#galleryModal">
                            @foreach ($products as $product => $row)
                                <div class="card h-100 col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-5 g-0"
                                    style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; max-width:20em; margin:1.5em">
                                    <div class="card-content ">
                                        <img class="card-img-top border rounded"
                                            src="{{ asset('product-photos/' . $row->photo) }}"
                                            style="width: 100%; object-fit:cover; height:15em ">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $row->nama }}</h5>foto
                                            <p class="card-text">
                                                {{ $row->deskripsi }}
                                            </p>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush mb-5">
                                        <li class="list-group-item">Price : {{ $row->harga }}</li>
                                        <li class="list-group-item">Stok : {{ $row->qty }} Pcs</li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
