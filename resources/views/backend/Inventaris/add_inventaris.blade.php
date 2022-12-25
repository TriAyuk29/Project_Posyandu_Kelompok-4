@extends('admin.layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">

        <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Data Inventaris</h4>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                <form method="post" action="{{ route('inventaris.store') }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label for="nama">NAMA DESA<span class="text-danger"></span></label>
                        <input id="nama" type="text" name="nama_desa" class="form-control" required>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>FASILITAS<span class="text-danger"></span></label>
                        <input type="text" name="fasilitas" class="form-control" required>
                      </div>
                    </div>
                    <!-- end colomd6 -->

                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>ALAT<span class="text-danger"></span></label>
                        <input type="text" name="alat" class="form-control" required>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    
                    <!--END row select-->

                  </div>
                  <!-- end row -->

                  
                  <!-- end row -->
                  <div class="text-xs-right">
                    <button type="submit" class="btn btn-rounded btn-primary">Submit</button>
                  </div>
                </form>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection

<script src="{{ asset('backend/js/pages/form-validation.js') }}"></script>
