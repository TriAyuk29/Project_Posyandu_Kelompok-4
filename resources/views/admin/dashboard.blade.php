@extends('admin.layout')


@section('content')
<nav class="navbar bg-primary p-2 text-white bg-opacity-75">
  <div class="container-fluid">
    <!-- <span class="navbar-brand mb-0 h1 text-white fs-3 font-monospace ">DASHBOARD</span> -->
    <div class="right">
        <h1>Dashboard</h1>
      </div>
  </div>

  <div class="box-body d-flex justify-content-center">
    <form action="{{ route('jadwal')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <div class="controls">
              <input type="text" name="nama" 
                class="form-control" required data-validation-required-message="This field is required">
            </div>
          </div>
        </div>
        <!-- end basic select -->

        <div class="col-md-2">
          <button type="submit" class="btn btn-rounded btn-primary">Submit</button>
        </div>
      </div>      
</form>
  </div>
</nav>

  

  <div class="box-body d-flex bg-primary p-2 text-dark bg-opacity-50 justify-content-center">
  <div class="row-1">
      <div class="col-12">
    <!-- <img src="{{ asset('assets/images/fotoo posyandu.webp') }}" class="img-fluid" style="height:600px; width:auto;"> -->
    <h5> Halaman Pencarian Data Dengan Cepat </h5>
    </div>
      </div>
    </div>


@endsection
