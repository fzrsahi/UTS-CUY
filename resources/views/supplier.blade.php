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
                                            <tr>
                                                <td class="text-bold-500">Michael Right</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">UI/UX</td>
                                                <td><a href="#"><i class="bi bi-pencil-fill"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold-500">Morgan Vanblum</td>
                                                <td>$13/hr</td>
                                                <td class="text-bold-500">Graphic concepts</td>
                                                <td><a href="#"><i class="bi bi-pencil-fill"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold-500">Tiffani Blogz</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">Animation</td>
                                                <td><a href="#"><i class="bi bi-pencil-fill"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold-500">Ashley Boul</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">Animation</td>
                                                <td><a href="#"><i class="bi bi-pencil-fill"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold-500">Mikkey Mice</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">Animation</td>
                                                <td><a href="#"><i class="bi bi-pencil-fill"></i></a></td>
                                            </tr>
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
