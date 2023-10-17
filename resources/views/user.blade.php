@extends('layouts.main')
@section('container')
    <div class="page-heading">
        <h3>Manajemen Pengguna</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="card">
                <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <h5 class="card-title">Daftar Pengguna Website</h5>
                                    <button class="btn btn-primary" onclick="alert('Fitur Belum Selesai Dikembangkan, Ditunggu Updatenya !!!!')">Tambahkan User</button>
                                </div>
                            </div>
                            <div class="card-content">
                                <!-- table head dark -->
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td class="text-bold-500">{{ $user['name'] }}</td>
                                                    <td>{{ $user['username'] }}</td>
                                                    <td>{{ $user['role'] }}</td>
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
