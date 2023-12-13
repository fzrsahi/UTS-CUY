@extends('layouts.main')
@section('container')

<form action="/updateusers/{{$data->id}}" method="POST" enctype="multipart/form-data">
<div class="container ">
  <div class="card mb-4 text-center" style="max-width: 5140px; height: 302px;">
    <div class="row g-0 ">
      <div class="col-md-4 bg-dark" style="height: 500px;">
        <img src="{{asset('user-photos/' . $data->foto)}}" class="card-img-top mw-100 h-100 object-fit-fill " alt="...">
      </div>
      <div class="col-md-8 bg-light">
        <div class="card-body  text-dark">
          <h1 class="card-title" style="margin: 120px">Nama : {{ $data->name }}</h1>
          <h5 class="card-tittle" style="margin-top: -90px">Username : {{ $data->username }} </h5>
          <h4 class="card-tittle text-danger" style="margin-top: 30px">Role : {{ $data->role }} </h4>
          <p class="card-text"><small class="text-light">Last updated 3 mins ago</small></p>
         
          <a href="/users/{{ $data['id'] }}" class="btn text-light d-sm-block bg-primary" style="margin-bottom: -80px">EDIT</a>
            
          <a href="/users" class="btn text-light d-sm-block bg-danger" style="margin-top: 90px">KEMBALI</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection