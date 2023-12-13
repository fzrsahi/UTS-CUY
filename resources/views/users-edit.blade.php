@extends('layouts.main')
@section('container')
    <div class="pDeskripsi-heading">
        <h3>Edit Users </h3>
    </div>
    <form action="/updateusers/{{$data->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <label for="kategori">User: </label>
                        <div class="form-group">
                            <!-- <input id="kategori" type="text" placeholder="Kategori" class="form-control" required
                                name="kategori"> -->
                                <select class="form-select" aria-label="Default select example" type="text" placeholder="Kategori" class="form-control" required
                                name="role">
                                <option selected disabled value="{{$data->role}}">{{$data->role}}</option>
                                <option value="admin">Admin</option>
                                @if ($data['role'] === "admin")
                                <option value disabled="karyawan">Karyawan</option>
                                </select>
                                @endif
                                @if ($data['role'] === "karyawan")
                                <option value ="karyawan">Karyawan</option>
                                @endif
                            </select>
                </div>
                <label for="product-name">Nama : </label>
                <div class="form-group">
                    <input id="name" type="text" placeholder="Nama" class="form-control"
                        name="name" value="{{$data->name}}" required>
                </div>
                <label for="harga">Username : </label>
                <div class="form-group">
                    <input id="username" type="text" placeholder="Username" class="form-control" name="username" value="{{$data->username}}"
                        required>
                </div>
                <label for="photo">Foto: </label>
                <div class="form-group">
                    <input type="file" name="foto" class="form-control" value="{{$data->foto}}" >Foto Sebelumnya : {{$data->foto}}"
                </div>
                <a href="/users" class="btn btn-primary">Password Setting</a>
           
          
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <a href="/users" class="d-none text-white d-sm-block">Cancel</a>
            </button>
            <button type="submit" class="btn btn-primary ms-1">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Simpan</span>
            </button>
        </div>
    </form>
@endsection
