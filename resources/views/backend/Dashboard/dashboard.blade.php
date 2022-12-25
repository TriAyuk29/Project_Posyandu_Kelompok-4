@extends('admin.layout')

@section('content')

  <div class="box-body d-flex bg-primary p-2 text-dark bg-opacity-50 justify-content-center align-items-center" style="height: 600px;">
    @foreach($dataPeserta as $peserta)
    <div class="col-4">
    <img src="{{ asset('assets/images/foto divaa.jpeg') }}" class="img-fluid" style="height:300px; width:auto;">
    </div>
    <div class="col-md-4">
      <ul class="list-group">
        <li class="list-group-item">Nama = {{$peserta->nama_peserta}}</li>
        <li class="list-group-item">Alamat = {{$peserta->alamat}}</li>
        <li class="list-group-item">Berat Badan = {{$peserta->berat_badan}}</li>
        <li class="list-group-item">Tinggi Badan = {{$peserta->tinggi_badan}}</li>
        <li class="list-group-item">Usia = {{$peserta->usia}}</li>
      </ul>
      </div>
    @endforeach

@endsection
