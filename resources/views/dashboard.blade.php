@extends('layouts.main')
@section('container')
    <div class="page-heading">
        <h3>Selamat Datang, Admin! </h3>
    </div>
    <div class="card m-3">
        <div class="card-header bg-danger">
            <h5 class="text-white">
                Peringatan : Mie Goreng Sudah Mau Habis, Stok Tersisa 3 Pcs
            </h5>
        </div>
    </div>
    <div class="page-content">
        <div class="d-flex justify-content-between">
            <div class="col-6 col-lg-3 col-md-6 m-3">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2 bi bi-eye-fill">
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Jumlah Produk</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6 m-3">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon blue mb-2 bi bi-eye-fill">
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Jumlah Pengguna</h6>
                                <h6 class="font-extrabold mb-0">183.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6 m-3">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon green mb-2 bi bi-eye-fill">
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Following</h6>
                                <h6 class="font-extrabold mb-0">80.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around">
        <div class="card">
            <div class="card-body">
                <div id="products-chart"></div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div id="users-chart"></div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="suppliers-chart"></div>
            </div>
        </div>
    </div>
@endsection
