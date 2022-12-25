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
            <h4 class="box-title">Data Peserta</h4>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                <form method="post" action="{{ route('datapeserta.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label for="nama">Nama Peserta<span class="text-danger"></span></label>
                        <input id="nama" type="text" name="nama_peserta" class="form-control" required>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Alamat<span class="text-danger"></span></label>
                        <input type="text" name="alamat" class="form-control" required>
                      </div>
                    </div>
                    <!-- end colomd6 -->

                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Berat Badan<span class="text-danger"></span></label>
                        <input type="text" name="berat_badan" class="form-control" required>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Tinggi Badan<span class="text-danger"></span></label>
                        <input type="text" name="tinggi_badan" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Usia<span class="text-danger"></span></label>
                        <div class="controls">
                          <input type="text" name="usia" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Profile_Image<span class="text-danger"></span></label>
                        <div class="controls">
                          <input type="file" name="profile_image" class="form-control" required>
                        </div>
                      </div>
                    </div>
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
