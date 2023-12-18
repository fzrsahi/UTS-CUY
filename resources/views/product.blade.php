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
                                        @if (filter_var($row->photo, FILTER_VALIDATE_URL))
                                            <img class="card-img-top border rounded" src="{{ $row->photo }}"
                                                style="width: 100%; object-fit:cover; height:15em ">
                                        @else
                                            <img class="card-img-top border rounded"
                                                src="{{ asset('product-photos/' . $row->photo) }}"
                                                style="width: 100%; object-fit:cover; height:15em ">
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $row->nama }}</h5>
                                            <p class="card-text mb-1">
                                                {{ $row->deskripsi }}
                                            </p>
                                            <li class="list-group-item">Price : Rp.{{ $row->harga }}</li>

                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush mb-5">
                                        @if ($row->qty <= 3)
                                            <li class="list-group-item fw-bolder fs-2 border ">Stok :
                                                <span class="text-danger">
                                                    {{ $row->qty }}
                                                    Pcs
                                                </span>
                                            @else
                                            <li class="list-group-item fw-bolder fs-2 border">Stok :
                                                {{ $row->qty }}

                                                Pcs
                                        @endif
                                        </li>
                                        <a href="/products/{{ $row->id }}"class="text-center btn btn-primary">View</a>
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
