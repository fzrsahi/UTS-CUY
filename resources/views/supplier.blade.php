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
                                <h4 class="card-title">Daftar Supplier</h4>
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
                                        
                                                    <td>
                                                        <a href="#">
                                                        <i class="bi bi-pencil-square"></i></a>
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
