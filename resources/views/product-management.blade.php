@extends('layouts.main')
@section('container')
    <div class="pDeskripsi-heading">
        <h3>Manajemen Produk </h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap justify-content-between">
                                <h5 class="card-title">Manajemen Produk</h5>
                                <button class="btn btn-primary" onclick="alert('Fitur Belum Selesai Dikembangkan, Ditunggu Updatenya !!!!')">Tambahkan Produk</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product['nama'] }}</td>
                                            <td>{{ $product['harga'] }}</td>
                                            <td>{{ $product['qty'] }}</td>
                                            <td>{{ $product['deskripsi'] }}</td>
                                            <td>{{ $product['kategori'] }}</td>
                                            <td onclick="alert('Fitur Belum Selesai Dikembangkan, Ditunggu Updatenya !!!!')">
                                                <a href="#"><i class="bi bi-pencil-fill"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    {{-- <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
