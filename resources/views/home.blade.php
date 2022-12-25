@extends('_layouts.app')

@section('content')
  <div class="container">
    <div class="row my-5">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <div class="row">
          <h2 class="text-white">Selamat Datang di Akun E-KMS !!</h2>
          <p class="text-white"> Untuk membantu pelayanan peserta anda</p>
          <a href="{{ url('user/register') }}" class="btn btn-warning text-white col-4"><b>Daftar Sekarang!</b></a>
        </div>
      </div>
      <div class="col-6">
        <img src="{{ asset('assets/images/ibu hamil.jpg') }}" class="img-fluid">
      </div>
    </div>
  </div>
@endsection
