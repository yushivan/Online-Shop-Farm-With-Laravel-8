@extends('admin/layout-admin/v_template')

@section('title','Tambah Direksi')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Menambahkan Direksi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <form method="POST" action="/admin/direksi" enctype="multipart/form-data">
        @csrf
            <div class="modal-body">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_direksi">Masukkan Nama Direksi</label>
                            <input type="text" class="form-control" value="{{ old('nama_direksi') }}" id="nama_direksi" class="@error('nama_direksi') is-invalid @enderror" name="nama_direksi" placeholder="Masukkan Nama Direksi">
                            <div class="text-danger">
                                @error('nama_direksi')
                                    {{ $message }}
                                @enderror
                              </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="jabatan_direksi">Masukkan Jabatan Direksi</label>
                            <input type="text" class="form-control" value="{{ old('jabatan_direksi') }}" id="jabatan_direksi" class="@error('jabatan_direksi') is-invalid @enderror" name="jabatan_direksi" placeholder="Masukkan Jabatan Direksi">
                            <div class="text-danger">
                                @error('jabatan_direksi')
                                    {{ $message }}
                                @enderror
                              </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="gambar_direksi">Masukkan Foto Direksi</label>
                            <input type="file" class="form-control" value="{{ old('gambar_direksi') }}" id="gambar_direksi" class="@error('gambar_direksi') is-invalid @enderror" name="gambar_direksi" placeholder="Masukkan Foto">
                            <div class="text-danger">
                                @error('gambar_direksi')
                                    {{ $message }}
                                @enderror
                              </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <a class="btn btn-light" href="/admin/direksi" role="button">Kembali</a>
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
    </form>
  </div>




@endsection

@section('js')
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
@endsection
