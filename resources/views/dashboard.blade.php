@extends('layouts.main')
@section('container')
    <div class="page-heading">
        <h3>Selamat Datang, {{ Auth::user() ? Auth::user()->username : 'Hacker' }} </h3>
    </div>
    <div class="card m-3">
        @foreach ($productLessThan3 as $product)
            <div class="card-header bg-danger m-1">
                <h5 class="text-white">
                    Peringatan : {{ $product->nama }} Sudah Mau Habis, Stok Tersisa {{ $product->qty }} Pcs
                </h5>
            </div>
        @endforeach
    </div>
    <div class="page-content">
        <div class="d-flex justify-content-between flex-wrap">
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
                                <h6 class="font-extrabold mb-0">{{ $totalProducts }}</h6>
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
                                <h6 class="font-extrabold mb-0">{{ $totalUsers }}</h6>
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
                                <h6 class="text-muted font-semibold">Jumlah Supplier</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalSuppliers }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card m-3 mb-5">
        <div class="card-body">
            <div class="row" id="table-bordered">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Monitoring Status Produk</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Daftar Masuk Dan Keluarnya Barang
                            </p>
                        </div>
                        <!-- table bordered -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Status</th>
                                        <th>Jumlah</th>
                                        <th>Karyawan Penerima</th>
                                        <th>Supplier</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($histories as $history)
                                        <tr>
                                            <td>{{ $history->product_name }}</td>
                                            <td>{{ $history->status }}</td>
                                            <td>{{ $history->qty }}</td>
                                            <td>{{ $history->user_name }}</td>
                                            <td>{{ $history->supplier_name }}</td>
                                            <td>{{ $history->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around flex-wrap">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var optionsProducts = {
            series: [{{ $totalDrinks }}, {{ $totalFoods }}],
            chart: {
                width: 450,
                type: 'pie',
            },
            labels: ['Makanan', 'Minuman'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chartProducts = new ApexCharts(document.querySelector("#products-chart"), optionsProducts);
        chartProducts.render();

        var optionsUsers = {
            series: [{{ $totalAdmins }}, {{ $totalEmployees }}],
            chart: {
                width: 450,
                type: 'pie',
            },
            labels: ['Admin', 'Karyawan'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chartUsers = new ApexCharts(document.querySelector("#users-chart"), optionsUsers);
        chartUsers.render();
    </script>
@endsection
