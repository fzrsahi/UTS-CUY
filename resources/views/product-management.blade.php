@extends('layouts.main')
@section('container')
    <div class="pDeskripsi-heading">
    </div>
    <div class="page-content">
        <section class="row">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap justify-content-between">
                                <h5 class="card-title">Manajemen Produk</h5>
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                    data-bs-target="#inlineForm">
                                    Tambah Produk
                                </button>
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
                                            <th>Update At</th>
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
                                                <td>{{ $product->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a
                                                        href="/products-management/{{ $product['id'] }}"class="bi bi-pencil-fill"></a>
                                                    <span>or</span>
                                                    <a href="#" class="bi bi-trash text-danger delete"
                                                        data-id="{{ $product->id }}"data-nama="{{ $product->nama }}""></a>
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
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Tambah Produk </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form action="/products-management" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <label for="product-name">Nama Produk : </label>
                        <div class="form-group">
                            <input id="product-name" type="text" placeholder="Nama Produk" class="form-control"
                                name="nama" required>
                        </div>
                        <label for="harga">Harga : </label>
                        <div class="form-group">
                            <input id="harga" type="number" placeholder="Harga" class="form-control" name="harga"
                                required>
                        </div>
                        <label for="stok">Stok : </label>
                        <div class="form-group">
                            <input id="stok" type="number" placeholder="Stok" class="form-control" name="qty"
                                required>
                        </div>
                        <label for="kategori">Kategori: </label>
                        <div class="form-group">
                            <input id="kategori" type="text" placeholder="Kategori" class="form-control" required
                                name="kategori">
                        </div>
                        <label for="deskripsi">Deskripsi: </label>
                        <div class="form-group">
                            <input id="deskripsi" type="text" placeholder="Deskrpisi" class="form-control"
                                name="deskripsi" required>
                        </div>
                        <label for="photo">Foto: </label>
                        <div class="form-group">
                            <input type="file" name="photo" class="form-control" required>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.delete').click(function() {

            var productid = $(this).attr('data-id');
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
                        window.location = "/delete-product/" + productid + ""
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
@endsection
