@extends('admin.layout')
@section('admin')
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
                <form method="post" action="{{ route('inventaris.update', $editData->id) }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Nama Desa<span class="text-danger"></span></h5>
                        <div class="controls">
                          <input type="text" name="nama_desa" value="{{ $editData->nama_desa }}"
                            class="form-control" required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end basic select -->

                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Fasilitas<span class="text-danger"></span></h5>
                        <div class="controls">
                          <input type="text" name="fasilitas" value="{{ $editData->fasilitas }}" class="form-control"
                            required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Alat<span class="text-danger"></span></h5>
                        <div class="controls">
                          <input type="text" name="alat" value="{{ $editData->alat }}"
                            class="form-control" required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    
                  </div>
                  <!--END row select-->


                  <!-- end row -->
                  <div class="text-xs-right">
                    <button type="submit" class="btn btn-rounded btn-success">Submit</button>
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
