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
            <h3 class="box-title">Data Inventaris</h3>
          </div>
          <!-- /.col -->
          <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('inventaris.add') }}" type="button" class="btn btn-success mb-5"> Tambah Data
              Inventaris</a>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12 bg-success p-2 text-dark bg-opacity-50">
            <div class="table-responsive">
              <table id="example1" class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center"> NAMA DESA</th>
                    <th class="text-center">FASILITAS</th>
                    <th class="text-center">ALAT</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $inventaris)
                    <tr>
                      <td class="text-center">{{ $inventaris->nama_desa }}</td>
                      <td class="text-center">{{ $inventaris->fasilitas }}</td>
                      <td class="text-center">{{ $inventaris->alat }}</td>
                      <td class="text-center">
                        <a href="{{ route('inventaris.edit', $inventaris->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('inventaris.delete', $inventaris->id) }}" id="delete"
                          class="btn btn-success">Delete</a>
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
