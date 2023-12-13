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
                                    <button type="button" class="btn btn-outline-success bg-success text-white"
                                        data-bs-toggle="modal" data-bs-target="#inlineForm">
                                        Tambah Supplier
                                    </button>
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
                                                <th>Update At</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($suppliers as $supplier)
                                                <tr>
                                                    <td>{{ $supplier['nama'] }}</td>
                                                    <td>{{ $supplier['nomor_telepon'] }}</td>
                                                    <td>{{ $supplier['alamat'] }}</td>
                                                    <td>{{ $supplier->created_at->diffForHumans() }}</td>

                                                    <td>
                                                        <a
                                                            href="/suppliers/{{ $supplier['id'] }}"class="bi bi-pencil-fill"></a>
                                                        <span>or</span>
                                                        <a href="#" class="bi bi-trash text-danger delete"
                                                            data-id="{{ $supplier->id }}"data-nama="{{ $supplier->nama }}""></a>
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
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Tambah Supplier </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <form action="/suppliers" method="POST">
                        @csrf
                        <div class="modal-body">
                            <label for="product-name">Nama Supplier : </label>
                            <div class="form-group">
                                <input id="nama" type="text" placeholder="Nama" class="form-control" name="nama"
                                    required>
                            </div>
                            <label for="harga">Email : </label>
                            <div class="form-group">
                                <input id="nomor_telepon" type="text" placeholder="Email" class="form-control"
                                    name="nomor_telepon" required>
                            </div>
                            <label for="stok">Alamat : </label>
                            <div class="form-group">
                                <input id="alamat" type="text" placeholder="Alamat" class="form-control"
                                    name="alamat" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tutup</span>
                            </button>
                            <button type="submit" class="btn btn-primary ms-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tambah</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
    <script>
        $('.delete').click(function() {

            var supplierid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Are you sure?",
                    text: "File " + nama + " akan di hapus",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete-supplier/" + supplierid + ""
                        swal("File Kamu Terhapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("File Tidak Jadi Di Hapus!!!", {
                            icon: "warning",
                        });
                    }
                });
        });
    </script>

    <script>
        @if (Session::has('sukses'))
            toastr.success(" {{ Session::get('sukses') }}")
        @endif
    </script>

    </html>
@endsection
