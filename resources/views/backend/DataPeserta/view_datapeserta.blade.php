@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-6">
            <h4 class="box-title">Data Peserta</h4>
          </div>
          <!-- /.col -->
          <div class="col-6  d-flex justify-content-end">
            <a href="{{ route('datapeserta.add') }}" type="button" class="btn btn-primary mb-5">Data
              Peserta</a>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12 bg-primary p-2 text-dark bg-opacity-50">
            <div class="table-responsive">
              <table id="example1" class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Peserta</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Berat Badan</th>
                    <th class="text-center">Tinggi Badan</th>
                    <th class="text-center">Usia</th>
                    <th class="text-center">Profile Image</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $datapeserta)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td class="text-center">{{ $datapeserta->nama_peserta }}</td>
                      <td class="text-center">{{ $datapeserta->alamat }}</td>
                      <td class="text-center">{{ $datapeserta->berat_badan }}</td>
                      <td class="text-center">{{ $datapeserta->tinggi_badan }}</td>
                      <td class="text-center">{{ $datapeserta->usia }}</td>
                      <td class="text-center">
                        <img src="{{ asset('uploads/datapeserta/'.$datapeserta->profile_image) }}" width="70px" height="70px" alt="Image">
                      </td>
                      <td class="text-center">
                        <a href="{{ route('datapeserta.edit', $datapeserta->id) }}" class="btn btn-outline-primary">Edit</a>
                        <a href="{{ route('datapeserta.delete', $datapeserta->id) }}" id="delete"
                          class="btn btn-outline-primary">Delete</a>
                      </td>

                    </tr>
                  @endforeach
                  <tr>
              </table>
              <!-- /.col -->
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->

    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection

<!-- Vendor JS -->
<script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>
