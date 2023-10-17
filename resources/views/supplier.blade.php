@extends('layouts.main')
@section('container')
    <div class="page-heading">
        <h3>Manajemen Supplier</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="card">
                <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <h5 class="card-title">Daftar Supplier</h5>
                                    <button class="btn btn-primary" onclick="alert('Fitur Belum Selesai Dikembangkan, Ditunggu Updatenya !!!!')">Tambahkan Supplier</button>
                                </div>
                            </div>
                            <div class="card-content">
                                <!-- table head dark -->
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($suppliers as $supplier)
                                                <tr>
                                                    <td>{{ $supplier['nama'] }}</td>
                                                    <td>{{ $supplier['nomor_telepon'] }}</td>
                                                    <td>{{ $supplier['alamat'] }}</td>
                                        
                                                    <td onclick="alert('Fitur Belum Selesai Dikembangkan, Ditunggu Updatenya !!!!')">
                                                        <a href="#"><i class="bi bi-pencil-fill"></i></a>
                                                    </td>
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

        </section>
    </div>
@endsection
