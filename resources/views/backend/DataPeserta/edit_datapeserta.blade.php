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
            <h4 class="box-title">Data Peserta</h4>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                <form method="post" action="{{ route('datapeserta.update', $editData->id) }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Nama Peserta<span class="text-danger"></span></h5>
                        <div class="controls">
                          <input type="text" name="nama_peserta" value="{{ $editData->nama_peserta }}"
                            class="form-control" required data-validation-required-message="This field is required">
                        </div>
                        <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for
                            required validation.</small></div>
                      </div>
                    </div>
                    <!-- end basic select -->

                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Alamat<span class="text-danger"></span></h5>
                        <div class="controls">
                          <input type="alamat" name="alamat" value="{{ $editData->alamat }}" class="form-control"
                            required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Berat Badan<span class="text-danger"></span></h5>
                        <div class="controls">
                          <input type="berat_badan" name="berat_badan" value="{{ $editData->berat_badan }}"
                            class="form-control" required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Tinggi Badan<span class="text-danger"></span></h5>
                        <div class="controls">
                          <input type="tinggi_badan" name="tinggi_badan" value="{{ $editData->tinggi_badan }}"
                            class="form-control" required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Usia<span class="text-danger"></span></h5>
                        <div class="controls">
                          <input type="usia" name="usia" value="{{ $editData->usia }}" class="form-control" required
                            data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Profile_Image<span class="text-danger"></span></label>
                        <div class="controls">
                          <input type="file" name="profile_image" class="form-control" required>
                          <img src="{{ asset('uploads/image/'.$datapeserta->profile_image) }}" width="70px" height="70px" alt="Image">
                        </div>
                      </div>
                    </div>

                    <!-- end colomd6 -->
                  </div>
                  <!--END row select-->


                  <!-- end row -->
                  <div class="text-xs-right">
                    <button type="submit" class="btn btn-rounded btn-info">Submit</button>
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
